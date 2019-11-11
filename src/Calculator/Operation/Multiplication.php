<?php

namespace Calculator\Operation;

use Calculator\Number;

/**
 * Class Multiplication
 * @package Calculator\Operation
 *
 */
class Multiplication extends AbstractOperation
{
    /**
     * @param Number $leftHandSide
     * @param Number $rightHandSide
     *
     * @return Number
     */
    public function apply(Number $leftHandSide, Number $rightHandSide): Number
    {
        return new Number(
            $this->round($leftHandSide->value() * $rightHandSide->value())
        );
    }
}