<?php declare(strict_types=1);

namespace Freshp\Example\Feature;

class Php73
{
    public static function trailingComma(): array
    {
        $arrayOne = ['foo', 'bar'];
        $arrayTwo = ['buba', 'balatschki'];
        $arrayThree = ['schnitzel', 'käse'];

        return array_merge(
            $arrayOne,
            $arrayTwo,
            $arrayThree,
            );
    }

    public static function isCountable(iterable $value): bool
    {
        return is_countable($value);
    }

    public static function arrayKeyFirst(array $value)
    {
        return array_key_first($value);
    }

    public static function arrayKeyLast(array $value)
    {
        return array_key_last($value);
    }

    public static function hereDocs(string $variable = 'test'): string
    {
        return <<<TEST
            hiegsdr steht hochwertiger Text mit der Variablen $variable
        TEST;
    }

    public static function nowDocs(string $variable = 'test'): string
    {
        return <<<'TEST'
            hier steht hochwertiger Text mit der Variablen $variable
        TEST;
    }

    /**
     * @throws \JsonException
     */
    public static function jsonEncodeHandling($value = null): string
    {
        return json_encode($value, JSON_THROW_ON_ERROR);
    }

    /**
     * @throws \JsonException
     */
    public static function jsonDecodeHandling(string $value)
    {
        return json_decode($value, true, 512, JSON_THROW_ON_ERROR);
    }
}
