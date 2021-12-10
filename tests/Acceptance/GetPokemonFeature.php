<?php

declare(strict_types=1);

namespace App\Tests\Acceptance;

use Symfony\Component\HttpFoundation\Response;

final class GetPokemonFeature extends TestCase
{
    /** @test */
    public function itShouldRetrieveAPokemon(): void
    {
        $response = $this->get('/api/pokemon');
        $decodedResponse = json_decode($response->getContent(), true);

        self::assertSame(Response::HTTP_OK, $response->getStatusCode());
        self::assertNotEmpty($decodedResponse['results']);
    }
}
