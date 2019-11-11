<?php

namespace Calculator\Operation;

use Calculator\Number;
use Calculator\Operation\Exception\DivisionByZeroException;

/**
 * Class Division
 * @package Calculator\Operation
 *
 */
class Division extends AbstractOperation
{
    /**
     * @param Number $leftHandSide
     * @param Number $rightHandSide
     *
     * @return Number
     * @throws DivisionByZeroException
     */
    public function apply(Number $leftHandSide, Number $rightHandSide): Number
    {
        if($rightHandSide->value() === 0.0) {
            $m = 'Division by zero. Can not apply this operation as leftHandSide = 0.';
            throw new DivisionByZeroException($m,);
        }

        return new Number(
            $this->round($leftHandSide->value() / $rightHandSide->value())
        );
    }
}