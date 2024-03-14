<?php
namespace Pattern\Iterator;
/**
 * RepositoryIterator class
 * @package Patterns
 * @subpackage Iterator
 * @category behavioral
 * @see http://php.net/manual/en/class.iterator.php
 */
class RepositoryIterator implements \Iterator
{
    /**
     * Iteration's key
     * @var integer
     */
    private $position   = 0;
    /**
     * Array of Entities
     * @var array
     */
    private $repository = [];
    /**
     * Class constructor
     * @param Repository $repository instance of repository
     * @return void
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * {@inheritdoc}
     */
    public function rewind()
    {
        // @todo implement
    }
    /**
     * {@inheritdoc}
     */
    public function current()
    {
        // @todo implement
    }
    /**
     * {@inheritdoc}
     */
    public function key()
    {
        return $this->position;
    }
    /**
     * {@inheritdoc}
     */
    public function next()
    {
        // @todo implement
    }
    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return isset($this->repository[$this->position]);
    }
}