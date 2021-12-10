<?php

namespace App\Application\Dto;

class GetPokemonRequest
{
    public function __construct(
        public readonly int $limit,
        public readonly int $offset
    ) {}
}