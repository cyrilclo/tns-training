<?php

declare(strict_types = 1);

namespace App\Domain;

use App\Shared\Exception\InvalidIntegerDomainException;

final class LimitException extends InvalidIntegerDomainException
{
    static function valueObject(): string
    {
        return "limit";
    }
}
