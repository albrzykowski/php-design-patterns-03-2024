<?php
namespace Pattern\Proxy;
/**
 * User class
 * @package Patterns
 * @subpackage Proxy
 * @category structural
 */
class User implements UserInterface
{
    /**
     * Sample property
     * @var string
     */
    private $name;
    /**
     * Updates user
     * @return mixed
     */
    public function update()
    {
        return '<p>User object updated</p>';
    }
    /**
     * Sets name
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        // @todo implement
    }
    /**
     * Gets name
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}