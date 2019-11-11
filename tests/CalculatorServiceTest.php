<?php


use Calculator\Expression;
use Calculator\Number;
use Calculator\Operation\AbstractOperation;
use Calculator\Operation\Addition;
use Calculator\Operation\Division;
use Calculator\Operation\Multiplication;
use Calculator\Operation\Subtraction;
use PHPUnit\Framework\TestCase;

class CalculatorServiceTest extends TestCase
{
    /**
     * @dataProvider expressionProvider
     *
     * @param $leftHandSide
     * @param $operation
     * @param $rightHandSide
     * @param $expected
     */
    public function testItCanCalculate(
        Number $leftHandSide,
        AbstractOperation $operation,
        Number $rightHandSide,
        Number $expected
    ) {
        $expression = new Expression($leftHandSide, $operation, $rightHandSide);

        $this->assertEquals($expected->value(), $expression->calculate()->value());
    }

    public function expressionProvider()
    {
        // leftHandSide, operation, rightHandSide, expected
        return [
            [new Number(7), new Addition(), new Number(4), new Number(11)],
            [new Number(22), new Subtraction(), new Number(45), new Number(-23)],
            [new Number(95), new Multiplication(), new Number(1.5), new Number(142.5)],
            [new Number(103), new Division(), new Number(7), new Number(14.714)],
        ];
    }
}
