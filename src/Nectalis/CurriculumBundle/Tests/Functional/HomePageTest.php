<?php

namespace Nectalis\CurriculumBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomePageTest extends WebTestCase
{
    public function testValidResponse()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');


        $this->assertEquals(
            200,
            $client->getResponse()->getStatusCode()
        );

        $this->assertTrue($crawler->filter('h1')->text() === "Curriculum");
        $this->assertTrue($crawler->filter('title')->text() === "Curriculum");

        

    }
}
