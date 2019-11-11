<?php

use Calculator\Number;
use Calculator\Operation\Division;
use Calculator\Operation\Exception\DivisionByZeroException;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    /**
     * @dataProvider divisionNumberProvider
     *
     * @param $leftHandSide
     * @param $rightHandSide
     * @param $expected
     *
     * @throws DivisionByZeroException
     */
    public function testItCanDivide($leftHandSide, $rightHandSide, $expected)
    {
        $this->assertEquals($expected, (new Division())->apply($leftHandSide, $rightHandSide));
    }

    public function testItThrowsDivisionByZeroException()
    {
       $this->expectException(DivisionByZeroException::class);
       $this->expectExceptionMessage('Division by zero. Can not apply this operation as leftHandSide = 0.');

       (new Division())->apply(new Number(1), new Number(0));
    }

    public function divisionNumberProvider()
    {
        // leftHandSide, rightHandSide, expected
        return [
            [new Number(1), new Number(1), new Number(1)],
            [new Number(3), new Number(3), new Number(1)],
            [new Number(10), new Number(5), new Number(2)],
            [new Number(555), new Number(444), new Number(1.25)],
            [new Number(0), new Number(1), new Number(0)],
            [new Number(-10), new Number(5), new Number(-2)],
            [new Number(1.2), new Number(2.2), new Number(0.545)],
            [new Number(-9.8), new Number(2.2), new Number(-4.455)],
            [new Number(6.66666), new Number(7.77777), new Number(0.857)],
        ];
    }
}
