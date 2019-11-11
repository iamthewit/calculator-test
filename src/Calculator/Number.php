<?php

namespace Calculator;

/**
 * Class Number
 *
 */
class Number
{
    /**
     * @var float
     */
    private $value;

    /**
     * Number constructor.
     *
     * @param float $value
     */
    public function __construct(float $value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function value(): float
    {
        return $this->value;
    }
}