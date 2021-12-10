<?php

declare(strict_types = 1);

namespace App\Domain;

final class Offset
{
    public function __construct(public readonly int $offset)
    {
        if (0 < $this->offset) {
            throw OffsetException::withValue($this->offset);
        }
    }
}
