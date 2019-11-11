<?php

use Calculator\Expression;
use Calculator\Number;
use Calculator\Operation\AbstractOperation;
use Calculator\Operation\Addition;
use Calculator\Operation\Division;
use Calculator\Operation\Multiplication;
use Calculator\Operation\Subtraction;
use PHPUnit\Framework\TestCase;

class ExpressionTest extends TestCase
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
            [new Number(1), new Addition(), new Number(1), new Number(2)],
            [new Number(1), new Subtraction(), new Number(1), new Number(0)],
            [new Number(2), new Multiplication(), new Number(2), new Number(4)],
            [new Number(2), new Division(), new Number(2), new Number(1)],
        ];
    }
}
