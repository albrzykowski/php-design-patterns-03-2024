<?php
namespace Pattern\Bridge;
use Pattern\Bridge\Norm;
/**
 * Euclidean (natural) norm
 * @package Patterns
 * @subpackage Bridge
 * @category structural
 */
class EuclideanNorm implements Norm
{
    public function calculate($coefficients)
    {
        $acc = 0;
        foreach($coefficients as $coefficient) {
            $acc += $coefficient * $coefficient;
        }

        return sqrt($acc);
    }
}