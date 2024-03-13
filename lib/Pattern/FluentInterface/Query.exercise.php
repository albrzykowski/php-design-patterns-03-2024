<?php
namespace Pattern\FluentInterface;
/**
 * Query class
 * @package Patterns
 * @subpackage FluentInterface
 */
class Query
{
    /**
     * Sample query
     * @return string
     */
    private $query = '';
    /**
     * Sample select
     * @return Query
     */
    public function select($param)
    {
        $this->query .= sprintf('<p>Selecting item: %s</p>', $param);
        return $this;
    }
    /**
     * Sample where
     * @return Query
     */
    // @todo implement
    /**
     * Sample orderBy
     * @return Query
     */
    // @todo implement
    
    /**
     * Returns $this->query
     * @return string
     */
    public function __toString()
    {
        return $this->query;
    }
}