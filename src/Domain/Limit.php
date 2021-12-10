<?php

declare(strict_types = 1);

namespace App\Domain;

final class Limit
{
    public function __construct(public readonly int $limit)
    {
        if ($this->limit <= 0) {
            throw LimitException::withValue($this->limit);
        }
    }
}
