<?php

namespace Acme\StoreBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Fabien');

        $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
    public function testShow()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/symfony/web/app_dev.php/store/show/1');
        $this->assertRegExp('/name/', $client->getResponse()->getContent());
    }
}
