<?php

namespace Calculator\Operation;

use Calculator\Number;

/**
 * Class AbstractOperation
 * @package Calculator\Operation
 *
 */
abstract class AbstractOperation
{
    const DECIMAL_PLACES = 3;

    /**
     * @param Number $leftHandSide
     * @param Number $rightHandSide
     *
     * @return Number
     */
    abstract public function apply(Number $leftHandSide, Number $rightHandSide): Number;

    public function round(float $value)
    {
        return round($value, self::DECIMAL_PLACES);
    }
}