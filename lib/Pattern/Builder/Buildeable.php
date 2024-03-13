<?php
namespace Pattern\Builder;
/**
 * IBuildable interface
 * @package Patterns
 * @subpackage Builder
 * @category creational
 */
interface Buildeable
{
    /**
     * Builds something
     * @return void
     */
    public function buildPartOne();
    /**
     * Builds something else
     * @return void
     */
    public function buildPartTwo();
    /**
     * Returns product
     * @return Product
     */
    public function getProduct();
}