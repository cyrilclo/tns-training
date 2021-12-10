<?php

declare(strict_types = 1);

namespace App\Shared\Exception;

use InvalidArgumentException;

abstract class InvalidIntegerDomainException extends InvalidArgumentException
{
    public static function withValue(int $value): static
    {
        return new static(sprintf("The value %d is not a valid %s", $value, static::valueObject()));
    }

    abstract static function valueObject():string;
}
