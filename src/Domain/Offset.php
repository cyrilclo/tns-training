<?php

declare(strict_types = 1);

namespace App\Domain;

final class Offset
{
    public function __construct(public readonly int $offset)
    {
        if ($this->offset < 0) {
            throw OffsetException::withValue($this->offset);
        }
    }
}
