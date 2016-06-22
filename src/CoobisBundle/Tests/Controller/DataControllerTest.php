<?php

namespace CoobisBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DataControllerTest extends WebTestCase
{
    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        
        //作为superadmin登录系统
        $this->loginAsAdmin($client);

        // Create a new entry in the database
        $crawler = $client->request('GET', '/data/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /data/");
        $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'coobisbundle_data[url]'  => 'Test.com',
            'coobisbundle_data[moz_title]'  => 'Test',
            'coobisbundle_data[moz_url]'  => 'Test.com',
            'coobisbundle_data[moz_external_links]'  => '10000',
            'coobisbundle_data[moz_rank]'  => '20',
            'coobisbundle_data[moz_subdomain_mozRank]'  => '20',
            'coobisbundle_data[moz_http_status_code]'  => '404',
            'coobisbundle_data[moz_page_authority]'  => '90',
            'coobisbundle_data[moz_domain_authority]'  => '90',
            'coobisbundle_data[moz_links]'  => '20000',
            'coobisbundle_data[description]'  => 'Test?description',
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("Test.com")')->count(), 'Missing element td:contains("Test")');

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'coobisbundle_data[moz_title]'  => 'Foo',
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check the element contains an attribute with value equals "Foo"
        $this->assertGreaterThan(0, $crawler->filter('[value="Foo"]')->count(), 'Missing element [value="Foo"]');

        // Delete the entity
        $client->submit($crawler->selectButton('Delete')->form());
        $crawler = $client->followRedirect();

        // Check the entity has been delete on the list
        $this->assertNotRegExp('/Foo/', $client->getResponse()->getContent());
    }

    public function testSelectCategory()
    {
        // Create a new client to browse the application
        $client = static::createClient();
        
        //作为superadmin登录系统
        $this->loginAsAdmin($client);

        // Create a new entry in the database
        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /");
        $crawler = $client->click($crawler->selectLink('SEO')->link());

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('a:contains("Arts")')->count(), 'Missing element a:contains("Arts")');
    }

    public function testSeoIndex()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        //作为superadmin登录系统
        $this->loginAsAdmin($client);

        // Create a new entry in the database
        $crawler = $client->request('GET', '/data/selectCategory');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /data/");
        $crawler = $client->click($crawler->selectLink('Arts')->link());

        // Check data in the seoIndex view
        $this->assertGreaterThan(0, $crawler->filter('h3:contains("Youtube.com")')->count(), 'Missing element h3:contains("Youtube.com")');

        // clean the data of user
        $crawler = $client->click($crawler->selectLink('Category Select')->link());

        // Check the entity has been delete on the list
        $crawler = $client->request('GET', '/data');
        $this->assertNotRegExp('/Youtube/', $client->getResponse()->getContent());
    }

    private function loginAsAdmin($client)
    {
        $crawler = $client->request('GET', '/login');

        // Fill in the form and submit it
        $form = $crawler->selectButton('security.login.submit')->form();
        $form['username'] = 'admin';
        $form['password'] = 'kanlli';

        $client->submit($form);
    }
}
