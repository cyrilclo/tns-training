<?php

namespace App\Application\Dto;

class GetPokemonResponse
{
    public function __construct(public readonly array $pokemons) {}
}