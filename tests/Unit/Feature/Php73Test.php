<?php

namespace Freshp\Example\Tests\Unit\Feature;

use Freshp\Example\Feature\Php73;
use PHPUnit\Framework\TestCase;

class Php73Test extends TestCase
{
    public function testTrailingComma()
    {
        $this->assertTrue(is_array(Php73::trailingComma()));
    }

    public function testIsCountable()
    {
        $value = ['foo' => 'bar', 'buba' => 'balatschki'];

        $this->assertTrue(Php73::isCountable($value));
    }

    public function testArrayKeyFirst()
    {
        $value = ['foo' => 'bar', 'buba' => 'balatschki'];

        $this->assertEquals('foo', Php73::arrayKeyFirst($value));
    }

    public function testArrayKeyLast()
    {
        $value = ['foo' => 'bar', 'buba' => 'balatschki'];

        $this->assertEquals('buba', Php73::arrayKeyLast($value));
    }

    public function testHereDocs()
    {
        $needle = 'buba';
        $this->assertContains($needle, Php73::hereDocs($needle));
    }

    public function testNowDocs()
    {
        $needle = 'buba';
        $this->assertNotContains($needle, Php73::nowDocs($needle));
    }

    public function testJsonEncode()
    {
        $this->expectException(\JsonException::class);

        Php73::jsonEncodeHandling(random_bytes(15));
    }

    public function testJsonDecode()
    {
        $this->expectException(\JsonException::class);

        $value = '{invalid json';
        Php73::jsonDecodeHandling($value);
    }
}
