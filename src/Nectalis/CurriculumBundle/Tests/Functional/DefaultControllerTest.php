<?php

namespace Nectalis\CurriculumBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomePageTest extends WebTestCase
{
    public function testValidResponse()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        // $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);

        $this->assertEquals(
            200,
            $client->getResponse()->getStatusCode()
        );

    }
}
