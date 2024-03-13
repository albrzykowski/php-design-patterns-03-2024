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
     * User origin
     * @var UserInterface
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
        if ($this->user !== null) {
            $this->user->name = $name;
        } else {
            $this->session->name = $name;
        }
    }
    /**
     * Updates user
     * @return mixed
     */
    public function update()
    {
        if ($this->user == null) {
            $this->user = new User();
        }
        
        $this->user->setName($this->session->name);
        return $this->user->update();
    }
    
}