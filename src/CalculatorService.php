<?php

use Calculator\Expression;

/**
 * Class CalculatorService
 *
 */
class CalculatorService
{
    /**
     * @param Expression $expression
     *
     * @return Number
     */
    public function calculate(Expression $expression)
    {
        return $expression->calculate();
    }

    // TODO:
        // allow for multiple expressions to be passed in
        // OR a list of numbers and operations
        // need to think about BODMAS
        // validate the list
            // first item should be a number
            // last item should be a number

            // every other item after the first should be an operation
            // every item after an operation should be a number
}
