<?php

namespace CoobisBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends WebTestCase
{

    public function testCompleteScenario()
    {
        // Create a new client to browse the application
        $client = static::createClient();

        //作为superadmin登录系统
        $this->loginAsAdmin($client);

        // Create a new entry in the database
        $crawler = $client->request('GET', '/category/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /category/");
        $crawler = $client->click($crawler->selectLink('Create a new entry')->link());

        // Fill in the form and submit it
        $form = $crawler->selectButton('Create')->form(array(
            'coobisbundle_category[category_name]'  => 'Test',
            'coobisbundle_category[category_img_url]'  => 'Test_url',
            'coobisbundle_category[category_description]'  => 'Test_description',

        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        // Check data in the show view
        $this->assertGreaterThan(0, $crawler->filter('td:contains("Test")')->count(), 'Missing element td:contains("Test")');

        // Edit the entity
        $crawler = $client->click($crawler->selectLink('Edit')->link());

        $form = $crawler->selectButton('Edit')->form(array(
            'coobisbundle_category[category_name]'  => 'Foo',
            'coobisbundle_category[category_img_url]'  => 'Foo_url',
            'coobisbundle_category[category_description]'  => 'Foo_description',
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
