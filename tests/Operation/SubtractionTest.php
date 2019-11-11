<?php

use Calculator\Number;
use Calculator\Operation\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
    /**
     * @dataProvider subtractionNumberProvider
     *
     * @param $leftHandSide
     * @param $rightHandSide
     * @param $expected
     */
    public function testItCanSubtract($leftHandSide, $rightHandSide, $expected)
    {
        $this->assertEquals($expected, (new Subtraction())->apply($leftHandSide, $rightHandSide));
    }

    public function subtractionNumberProvider()
    {
        // leftHandSide, rightHandSide, expected
        return [
            [new Number(1), new Number(1), new Number(0)],
            [new Number(2), new Number(1), new Number(1)],
            [new Number(10), new Number(5), new Number(5)],
            [new Number(555), new Number(444), new Number(111)],
            [new Number(0), new Number(1), new Number(-1)],
            [new Number(-10), new Number(5), new Number(-15)],
            [new Number(1.2), new Number(2.6), new Number(-1.4)],
            [new Number(-9.8), new Number(2.5), new Number(-12.3)],
        ];
    }
}
