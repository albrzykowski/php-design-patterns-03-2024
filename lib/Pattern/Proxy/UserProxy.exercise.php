<?php
namespace Pattern\Proxy;
/**
 * UserProxy class
 * @package Patterns
 * @subpackage Proxy
 * @category structural
 */
class UserProxy implements UserInterface
{
    /**
     * Sample property
     * @var string
     */
    private $name;
    /**
     * User origin
     * @var string
     */
    private $user;
    /**
     * Class constructor
     * @return void
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    /**
     * Gets $user property
     * @return string
     */
    public function getName()
    {
        if ($this->user !== null) {
            return $this->user->name;
        } else {
            return $this->session->name;
        }
    }
    /**
     * Sets $name property
     * @param string $name sample property
     * @return void
     */
    public function setName($name)
    {
        // @todo implement
    }
    /**
     * Updates user
     * @return mixed
     */
    public function update()
    {
        // @todo implement (User object should be created here if it doesnt exist yet)
    }
    
}