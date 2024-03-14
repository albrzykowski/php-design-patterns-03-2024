<?php
namespace Pattern\Bridge;
/**
 * Vector interface
 * @package Patterns
 * @subpackage Bridge
 * @category structural
 */
abstract class Vector
{
    /**
     * @var Implementation
     */
    protected $norm;
    /**
     * @var $coefficients
     */
    protected $coefficients;

    public function __construct(Norm $norm, ...$coefficients)
    {
        $this->norm = $norm;
        $this->coefficients = $coefficients;
    }

    public function calculate()
    {
        // @todo implement
    }
}