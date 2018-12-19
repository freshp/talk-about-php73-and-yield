<?php declare(strict_types=1);

namespace Freshp\Example\Factory;

class YieldFactory
{
    public static function createFromScalarType($value): \Generator
    {
        yield $value;
    }

    public static function createFromArray(array $value): iterable
    {
        yield from $value;
    }

    public static function createFromArrayWithKey(array $value): iterable
    {
        foreach ($value as $key => $item) {
            yield $key => $item;
        }
    }
}
