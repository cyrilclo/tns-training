<?php

declare(strict_types = 1);

namespace App\Tests\Acceptance;

use Symfony\Component\HttpFoundation\Response;

final class GetPokemonFeature extends TestCase
{
    /** @test */
    public function itShouldRetrieveAPokemon(): void
    {
        $response        = $this->get('/api/pokemon?limit=1');
        $decodedResponse = json_decode($response->getContent(), true);

        self::assertSame(Response::HTTP_OK, $response->getStatusCode());
        self::assertNotEmpty($decodedResponse['results']);
    }

    /** @test */
    public function itShouldRetrieveALimitExceptionWhenNoLimit(): void
    {
        $limit = 0;
        $response        = $this->get(sprintf('/api/pokemon?limit=%d', $limit));

        self::assertSame(Response::HTTP_BAD_REQUEST, $response->getStatusCode());
        self::assertSame(sprintf("The value %d is not a valid limit", $limit), $response->getContent());
    }
}
