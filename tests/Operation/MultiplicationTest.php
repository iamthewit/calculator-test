<?php

use Calculator\Number;
use Calculator\Operation\Multiplication;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    /**
     * @dataProvider multiplicationNumberProvider
     *
     * @param $leftHandSide
     * @param $rightHandSide
     * @param $expected
     */
    public function testItCanMultiply($leftHandSide, $rightHandSide, $expected)
    {
        $this->assertEquals($expected, (new Multiplication())->apply($leftHandSide, $rightHandSide));
    }

    public function multiplicationNumberProvider()
    {
        // leftHandSide, rightHandSide, expected
        return [
            [new Number(1), new Number(1), new Number(1)],
            [new Number(3), new Number(3), new Number(9)],
            [new Number(10), new Number(10), new Number(100)],
            [new Number(555), new Number(444), new Number(246420)],
            [new Number(0), new Number(1), new Number(0)],
            [new Number(-10), new Number(5), new Number(-50)],
            [new Number(1.2), new Number(2.2), new Number(2.64)],
            [new Number(-9.8), new Number(2.2), new Number(-21.56)],
            [new Number(6.66666), new Number(7.77777), new Number(51.852)],
        ];
    }
}
