<?php

namespace App\Tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    public function testArticleIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/blog');

        self::assertResponseIsSuccessful();
    }
}
