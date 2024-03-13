<?php
namespace Pattern\Proxy;

interface UserInterface
{
    public function update();
    public function getName();
    public function setName($name);
}