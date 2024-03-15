<?php
namespace Pattern\Observer\Spl;
/**
 * Subject class
 * @package Patterns
 * @subpackage Observer
 * @category behavioral
 */
class Subject implements \SplSubject
{
    /**
     * Sample property
     * @var string
     */
    private $name;
    /**
     * Sample property
     * @var array
     */
    private $observers;
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Class constructor
     * @return void
     */
    public function __construct() 
    {
        $this->observers = array();
    }
    /**
     * {@inheritdoc}
     */
    public function attach(\SplObserver $observer) 
    {
        $this->observers[] = $observer;
    }
    /**
     * {@inheritdoc}
     */
    public function detach(\SplObserver $observer) 
    {
    }
    /**
     * {@inheritdoc}
     */
    public function notify() 
    {
        foreach ($this->observers as $obj) {
            $obj->update($this);
        }
    }
}