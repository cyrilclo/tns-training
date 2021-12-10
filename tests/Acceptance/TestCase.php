<?php

declare(strict_types=1);

namespace App\Tests\Acceptance;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

abstract class TestCase extends WebTestCase
{
    protected function get(string $route): Response
    {
        $client = static::createClient();
        $client->request('GET', $route);
        
        return $client->getResponse();
    }
}
