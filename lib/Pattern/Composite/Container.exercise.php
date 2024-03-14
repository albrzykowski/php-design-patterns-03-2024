<?php
namespace Pattern\Composite;
/**
 * Container class
 * @package Patterns
 * @subpackage Composite
 * @category structural
 */
class Container implements Nodeable
{
    /**
     * Array od children
     * @var array
     */
    private $childern = [];
    /**
     * Node's name
     * @var string
     */
    private $name;
    /**
     * Class constructor
     * @param string $name node's name
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
    /**
     * Adds node's child
     * @param Nodeable $child child
     * @return Container
     */
    public function addChild(Nodeable $child)
    {
        // @todo implement
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * {@inheritdoc}
     */
    public function render()
    {
        return function () {
            // @todo implement
        };
    }
}