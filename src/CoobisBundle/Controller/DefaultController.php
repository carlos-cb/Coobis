<?php

namespace CoobisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();

        if($user){
            $displayLogin = "none";
            $displayLogout = "display";
            $username = $user->getUsername();
        }else{
            $displayLogin = "display";
            $displayLogout = "none";
            $username = "Guest";
        }
        return $this->render('CoobisBundle:Default:index.html.twig', array(
            'username' => $username,
            'displayLogin' => $displayLogin,
            'displayLogout' => $displayLogout,
        ));
    }
}
