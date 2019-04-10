<?php
/**
 * Author: dkh
 * Date: 2019-04-10
 * Time: 11:55
 * Project: Chess
 */

namespace dkhru\chess;


class Object
{

    /**
     * Return object property value
     * @param $name
     * @return mixed
     * @throws \Exception
     */
    public function __get($name)
    {
        $method_name = 'get' . $name;
        if (method_exists($this, $method_name)) {
            return $this->$method_name();
        }
        throw new \Exception("Read invalid property {$name} for ".static::class);
    }

    /**
     * @param $name
     * @param $value
     * @return mixed
     * @throws \Exception
     */
    public function __set($name, $value)
    {
        $method_name = 'set' . $name;
        if (method_exists($this, $method_name)) {
            return $this->$method_name($value);
        }
        throw new \Exception("Write invalid property {$name} for ".static::class);
    }

}