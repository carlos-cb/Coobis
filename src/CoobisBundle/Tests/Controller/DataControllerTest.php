<?php

namespace CoobisBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DataControllerTest extends WebTestCase
{
    private $client = null;

    public function setUp()
    {
        $this->client = static::createClient();
    }

    public function testCompleteScenario()
    {
        //作为superadmin登录系统
        $this->logIn();

        // Create a new entry in the database
        $crawler = $this->client->request('GET', '/data/');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /data/");
        $crawler = $this->client->click($crawler->selectLink('Create a new entry')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'data[url]'  => 'Test.com',
            'data[mozTitle]'  => 'Test',
            'data[mozUrl]'  => 'Test.com',
            'data[mozExternalLinks]'  => '10000',
            'data[mozRank]'  => '20',
            'data[mozSubdomainMozRank]'  => '20',
            'data[mozHttpStatusCode]'  => '404',
            'data[mozPageAuthority]'  => '90',
            'data[mozDomainAuthority]'  => '90',
            'data[mozLinks]'  => '20000',
            'data[description]'  => 'Test?description',
        ));

        $this->client->submit($form);
        $crawler = $this->client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("Test.com")')->count(), 'Missing element td:contains("Test")');

        // Edit the entity
        $crawler = $this->client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'data[mozTitle]'  => 'Foo',
        ));

        $this->client->submit($form);
        $crawler = $this->client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $this->client->submit($crawler->selectButton('Delete')->form());
        $crawler = $this->client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $this->client->getResponse()->getContent());
    }

    public function testSelectCategory()
    {
        //作为superadmin登录系统
        $this->logIn();

        // Create a new entry in the database
        $crawler = $this->client->request('GET', '/');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /");
        $crawler = $this->client->click($crawler->selectLink('SEO')->link());

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('a:contains("Arts")')->count(), 'Missing element a:contains("Arts")');
    }

    /*public function testSeoIndex()
    {
        //作为superadmin登录系统
        $this->logIn();

        // Create a new entry in the database
        $crawler = $this->client->request('GET', '/data/selectCategory');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /data/selectCategory");
        $crawler = $this->client->click($crawler->selectLink('Arts')->link());

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /data/seoIndex");
        // Check data in the seoIndex view
        $this->assertGreaterThan(0, $crawler->filter('h3:contains("Youtube.com")')->count(), 'Missing element h3:contains("Youtube.com")');

        // clean the data of user
        $crawler = $this->client->click($crawler->selectLink('Category Select')->link());

        // Check the entity has been delete on the list
        $crawler = $this->client->request('GET', '/data');
        $this->assertNotRegExp('/Youtube/', $this->client->getResponse()->getContent());
    }
    */

    private function logIn()
    {
        $session = $this->client->getContainer()->get('session');

        $firewall = 'main';
        $token = new UsernamePasswordToken('admin', null, $firewall, array('ROLE_ADMIN'));
        $session->set('_security_'.$firewall, serialize($token));
        $session->save();

        $cookie = new Cookie($session->getName(), $session->getId());
        $this->client->getCookieJar()->set($cookie);
    }
}
