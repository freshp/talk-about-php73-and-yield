<?php

namespace Freshp\Example\Tests\Unit\Factory;

use Freshp\Example\Factory\YieldFactory;
use PHPUnit\Framework\TestCase;

class YieldFactoryTest extends TestCase
{
    public function testScalarValue()
    {
        $value = '123';
        $generator = YieldFactory::createFromScalarType($value);

        $this->assertEquals($value, $generator->current());
    }

    public function testArrayValue()
    {
        $value = ['123', '234'];
        $generator = YieldFactory::createFromArray($value);

        foreach ($generator as $item) {
            $this->assertTrue(in_array($item, $value));
        }
    }

    public function testArrayKeys()
    {
        $value = ['foo' => '123', 'bar' => '234'];
        $generator = YieldFactory::createFromArrayWithKey($value);

        foreach ($generator as $key => $item) {
            $this->assertTrue(array_key_exists($key, $value));
        }
    }
}
