<?php

use Calculator\Number;
use Calculator\Operation\Addition;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    /**
     * @dataProvider additionNumberProvider
     *
     * @param $leftHandSide
     * @param $rightHandSide
     * @param $expected
     */
    public function testItCanAdd($leftHandSide, $rightHandSide, $expected)
    {
        $this->assertEquals($expected, (new Addition())->apply($leftHandSide, $rightHandSide));
    }

    public function additionNumberProvider()
    {
        // leftHandSide, rightHandSide, expected
        return [
            [new Number(1), new Number(1), new Number(2)],
            [new Number(2), new Number(2), new Number(4)],
            [new Number(10), new Number(10), new Number(20)],
            [new Number(555), new Number(444), new Number(999)],
            [new Number(0), new Number(1), new Number(1)],
            [new Number(-10), new Number(5), new Number(-5)],
            [new Number(1.2), new Number(2.2), new Number(3.4)],
            [new Number(-9.8), new Number(2.2), new Number(-7.6)],
        ];
    }
}
