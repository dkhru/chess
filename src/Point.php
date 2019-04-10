<?php
/**
 * Author: dkh
 * Date: 2019-04-10
 * Time: 11:41
 * Project: Chess
 */

namespace dkhru\chess;


use mysql_xdevapi\Exception;

/**
 * Class Point
 * @package Chess
 *
 * @property int $x
 * @property int $y
 * @property-read int $runk
 * @property-read string $file
 */
class Point extends Object
{


    const MIN_AXIS = 0;
    const MAX_AXIS = 7;
    public static $xString = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
    private $_x;
    private $_y;

    /**
     * Point constructor.
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param $axis
     */
    private function checkAxis($axis)
    {
        if ($axis < self::MIN_AXIS || $axis > self::MAX_AXIS) {
            throw new Exception("Invalid point");
        }
    }


    /**
     * @return int
     */
    public function getX()
    {
        return $this->_x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->checkAxis($x);
        $this->_x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->_y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->checkAxis($y);
        $this->_y = $y;
    }


    /**
     * @return int
     */
    public function getRunk()
    {
        return $this->_y + 1;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return self::$xString[$this->_x];
    }


    public function __toString()
    {
        return "{$this->file}{$this->runk}";
    }

}