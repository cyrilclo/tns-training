<?php

declare(strict_types = 1);

namespace App\Domain;

use App\Shared\Exception\InvalidIntegerDomainException;

final class OffsetException extends InvalidIntegerDomainException
{
    static function valueObject(): string
    {
        return "offset";
    }
}
