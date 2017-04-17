<?php

namespace Multiexception\App;

/**
 * Class MultiException
 * @package App
 */
class MultiException extends \Exception implements \Iterator
{
    use Iterator;
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param \Exception $e
     */
    public function add(\Exception $e) {
        $this->data[] = $e;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->data;
    }
}