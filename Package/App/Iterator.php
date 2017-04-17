<?php

namespace Multi\App;

/**
 * Trait Iterator
 * @package App
 */
trait Iterator
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * function rewind Iterator Interface
     */
    public function rewind()
    {
        reset($this->data);
    }

    /**
     * function current Iterator Interface
     * @return mixed
     */
    public function current()
    {
        return current($this->data);
    }

    /**
     * function key Iterator Interface
     * @return mixed
     */
    public function key()
    {
        return key($this->data);
    }

    /**
     * function next Iterator Interface
     * @return mixed
     */
    public function next()
    {
        return next($this->data);
    }

    /**
     * function valid Iterator Interface
     * @return bool
     */
    public function valid()
    {
        return !empty(key($this->data));
    }
}