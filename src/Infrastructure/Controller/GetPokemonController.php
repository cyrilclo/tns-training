<?php

declare(strict_types=1);

namespace App\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\Response;

final class GetPokemonController
{
    public function __invoke(): Response
    {
        return new Response('everything is good');
    }
}
