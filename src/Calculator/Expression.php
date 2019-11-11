<?php

namespace Calculator;

use Calculator\Operation\AbstractOperation;

/**
 * Class Expression
 * @package Calculator
 *
 */
class Expression
{
    /** @var Number */
    private $leftHandSide;

    /** @var AbstractOperation */
    private $operation;

    /** @var Number */
    private $rightHandSide;

    /**
     * Expression constructor.
     *
     * @param Number            $leftHandSide
     * @param AbstractOperation $operation
     * @param Number            $rightHandSide
     */
    public function __construct(Number $leftHandSide, AbstractOperation $operation, Number $rightHandSide)
    {
        $this->leftHandSide  = $leftHandSide;
        $this->operation     = $operation;
        $this->rightHandSide = $rightHandSide;
    }

    /**
     * @return Number
     */
    public function calculate(): Number
    {
        return $this->operation->apply($this->leftHandSide, $this->rightHandSide);
    }
}