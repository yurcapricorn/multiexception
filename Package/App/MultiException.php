<?php

namespace Yurcapricorn\Multiexception\App;

/**
 * Class MultiException
 * @package App
 */
class MultiException extends \Exception implements \Iterator
{
    use Iterator;
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