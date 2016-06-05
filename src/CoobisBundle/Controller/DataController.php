<?php

namespace CoobisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

use CoobisBundle\Entity\Data;
use CoobisBundle\Form\DataType;

/**
 * Data controller.
 *
 */
class DataController extends Controller
{
    /**
     * Lists all Data entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $datas = $em->getRepository('CoobisBundle:Data')->findAll();

        return $this->render('data/index.html.twig', array(
            'datas' => $datas,
        ));
    }

    /**
     * Creates a new Data entity.
     *
     */
    public function newAction(Request $request)
    {
        $datum = new Data();
        $form = $this->createForm('CoobisBundle\Form\DataType', $datum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($datum);
            $em->flush();

            return $this->redirectToRoute('data_show', array('id' => $datum->getId()));
        }

        return $this->render('data/new.html.twig', array(
            'datum' => $datum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Data entity.
     *
     */
    public function showAction(Data $datum)
    {
        $deleteForm = $this->createDeleteForm($datum);

        return $this->render('data/show.html.twig', array(
            'datum' => $datum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Data entity.
     *
     */
    public function editAction(Request $request, Data $datum)
    {
        $deleteForm = $this->createDeleteForm($datum);
        $editForm = $this->createForm('CoobisBundle\Form\DataType', $datum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($datum);
            $em->flush();

            return $this->redirectToRoute('data_edit', array('id' => $datum->getId()));
        }

        return $this->render('data/edit.html.twig', array(
            'datum' => $datum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Data entity.
     *
     */
    public function deleteAction(Request $request, Data $datum)
    {
        $form = $this->createDeleteForm($datum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($datum);
            $em->flush();
        }

        return $this->redirectToRoute('data_index');
    }

    /**
     * Creates a form to delete a Data entity.
     *
     * @param Data $datum The Data entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Data $datum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('data_delete', array('id' => $datum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Lista de todas las categorias para elegir.
     *
     */
    public function selectCategoryAction()
     {
         $em = $this->getDoctrine()->getManager();

         $this->truncateEntity("data");

         $categories = $em->getRepository('CoobisBundle:Category')->findAll();

         return $this->render('data/selectCategory.html.twig', array(
             'categories' => $categories,
         ));
     }

    public function seoIndexAction($categoryId)
    {
        $allPageNum = 3;
        $numDataPage = 10;
        $categoryName = $this->getCategoryName($categoryId);
        $gotUrl = $this->gotUrl($categoryName);

        if($gotUrl){
            for($i=1; $i<=$allPageNum; $i++){
                $urlArray = $this->urlToArray($gotUrl, $i);
                $moz = $this->postToMoz($urlArray, $i);
            }
        }

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery("SELECT p FROM CoobisBundle:Data p WHERE p.id > 0 and p.id <= $numDataPage");
        $datas = $query->getResult();

        return $this->render('data/seoIndex.html.twig', array(
            'datas' => $datas,
            'categoryId' => $categoryId,
        ));
    }

    public function seoPageAction($categoryId, $page)
    {

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery("SELECT p FROM CoobisBundle:Data p WHERE p.id > (($page-1)*10) and p.id <= ($page*10)");
        $datas = $query->getResult();

        return $this->render('data/seoIndex.html.twig', array(
            'datas' => $datas,
            'categoryId' => $categoryId,
        ));
    }
    
    private function getCategoryName($categoryId)
    {
        $category = $this->getDoctrine()
            ->getRepository('CoobisBundle:Category')
            ->findOneById($categoryId);
        $categoryName = $category->getCategoryName();

        return $categoryName;
    }

    private function gotUrl($categoryName)
    {
        $client = new Client();
        $crawler = $client->request('GET', 'http://www.alexa.com/topsites/category/Top/'.$categoryName.'');

        $allUrlArray = $crawler->filter('p')->each(function ($node, $i) {
            return $node->text();
        });
        return $allUrlArray;
    }

    private function postToMoz($urlArray, $page)
    {
        $accessID = "mozscape-4c58d2a02d";
        $secretKey = "fad4864da31066a0fc0580a8e536a52c";
        $expires = time() + 300;
        $stringToSign = $accessID."\n".$expires;
        $binarySignature = hash_hmac('sha1', $stringToSign, $secretKey, true);
        $urlSafeSignature = urlencode(base64_encode($binarySignature));
        $cols = "103616137253";
        $requestUrl = "http://lsapi.seomoz.com/linkscape/url-metrics/?Cols=".$cols."&AccessID=".$accessID."&Expires=".$expires."&Signature=".$urlSafeSignature;

        $batchedDomains = $urlArray;
        $encodedDomains = json_encode($batchedDomains);
        $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS     => $encodedDomains
        );
        $ch = curl_init($requestUrl);
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch);
        curl_close( $ch );
        $contents = json_decode($content, true);

        if($page < 3){
            for($i=0; $i<10; $i++){
                $arr = $contents[$i];
                $data = new Data();
                $data->setUrl($urlArray[$i]);
                $data->setMozTitle($arr['ut']);
                $data->setMozUrl($arr['uu']);
                $data->setMozExternalLinks($arr['ueid']);
                $data->setMozRank($arr['umrp']);
                $data->setMozSubdomainMozRank($arr['fmrp']);
                $data->setMozHttpStatusCode($arr['us']);
                $data->setMozPageAuthority($arr['upa']);
                $data->setMozDomainAuthority($arr['pda']);
                $data->setMozLinks($arr['uid']);
                $data->setUserId('1');

                $em = $this->getDoctrine()->getManager();
                $em->persist($data);
                $em->flush();
            }
        }else{
            for($i=0; $i<5; $i++){
                $arr = $contents[$i];
                $data = new Data();
                $data->setUrl($urlArray[$i]);
                $data->setMozTitle($arr['ut']);
                $data->setMozUrl($arr['uu']);
                $data->setMozExternalLinks($arr['ueid']);
                $data->setMozRank($arr['umrp']);
                $data->setMozSubdomainMozRank($arr['fmrp']);
                $data->setMozHttpStatusCode($arr['us']);
                $data->setMozPageAuthority($arr['upa']);
                $data->setMozDomainAuthority($arr['pda']);
                $data->setMozLinks($arr['uid']);
                $data->setUserId('1');

                $em = $this->getDoctrine()->getManager();
                $em->persist($data);
                $em->flush();
            }
        }

        return $arr;
    }

    private function truncateEntity($table)
    {
        $connection = $this->getDoctrine()->getManager()->getConnection();
        $platform   = $connection->getDatabasePlatform();
        $connection->executeUpdate($platform->getTruncateTableSQL($table, true /* whether to cascade */));
    }

    private function urlToArray($gotUrl, $page)
    {
        if($page < 3){
            $urlArray = array(
                0 => $gotUrl[($page-1)*10+1],
                1 => $gotUrl[($page-1)*10+2],
                2 => $gotUrl[($page-1)*10+3],
                3 => $gotUrl[($page-1)*10+4],
                4 => $gotUrl[($page-1)*10+5],
                5 => $gotUrl[($page-1)*10+6],
                6 => $gotUrl[($page-1)*10+7],
                7 => $gotUrl[($page-1)*10+8],
                8 => $gotUrl[($page-1)*10+9],
                9 => $gotUrl[($page-1)*10+10],
            );
        }else{
            $urlArray = array(
                0 => $gotUrl[($page-1)*10+1],
                1 => $gotUrl[($page-1)*10+2],
                2 => $gotUrl[($page-1)*10+3],
                3 => $gotUrl[($page-1)*10+4],
                4 => $gotUrl[($page-1)*10+5],
            );
        }
        return $urlArray;
    }

}
