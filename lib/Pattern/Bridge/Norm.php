<?php
namespace Pattern\Bridge;
/**
 * Norm interface
 * @package Patterns
 * @subpackage Bridge
 * @category structural
 */
interface Norm
{
    public function calculate($coefficients);
}