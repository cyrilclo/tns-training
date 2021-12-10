<?php

declare(strict_types=1);

namespace App\Infrastructure\Controller;

use App\Application\Dto\GetPokemonRequest;
use App\Application\Service\GetPokemonService;
use App\Domain\LimitException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class GetPokemonController
{
    public function __construct(private GetPokemonService $service) {}

    public function __invoke(Request $request): Response
    {
        try {
            $response = $this->service->run(
                new GetPokemonRequest(
                    (int) $request->query->get('limit', 20),
                    (int) $request->query->get('offset', 0)
                )
            );

            return new JsonResponse(['results' => $response->pokemons]);
        } catch (LimitException $e){
            return new Response($e->getMessage(), Response::HTTP_BAD_REQUEST);
        }

    }
}
