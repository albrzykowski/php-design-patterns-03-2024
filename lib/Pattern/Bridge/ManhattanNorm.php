<?php
namespace Pattern\Bridge;
use Pattern\Bridge\Norm;
/**
 * Manhattan (taxi) norm
 * @package Patterns
 * @subpackage Bridge
 * @category structural
 */
class ManhattanNorm implements Norm
{
    public function calculate($coefficients)
    {
        $acc = 0;
        foreach($coefficients as $coefficient) {
            $acc += $coefficient;
        }

        return abs($acc);
    }
}