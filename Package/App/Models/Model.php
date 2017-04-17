<?php

namespace Multiexception\App\Models;

use Multiexception\Iterator;
use Multiexception\MagicTrait;
use Multiexception\MultiException;


/**
 * Class Model
 * Maintains complex requests to Db class
 * @property int $id
 * @property string TABLE
 * @package App\Models
 */
abstract class Model implements \Iterator
{
    use MagicTrait;
    use Iterator;

    protected const TABLE = null;

    /**
     * method fill()
     * @param array $arr
     * @throws MultiException
     */
    public function fill(array $arr = [])
    {
        if (empty($arr)) {
            return;
        }
        $errors = new MultiException();
        foreach ($arr as $key => $val) {
            try {
                $method = 'set' . ucfirst($key);
                $this->$method($val);
            } catch (\UnexpectedValueException $e) {
                $errors->add($e);
            }
        }
        if (!empty($errors->getErrors())) {
            throw $errors;
        }
    }

}