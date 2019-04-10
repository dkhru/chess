<?php
/**
 * Author: dkh
 * Date: 2019-04-10
 * Time: 12:40
 * Project: Chess
 */

namespace dkhru\chess;


/**
 * Class Figure
 * @package Chess
 *
 * @property-read  int $color
 * @property-read  int $type
 * @property-read  float $cost
 * @property-read  int $point
 * @property-read  string $name
 * @property-read string $pointName
 * @property-read string $nameWithPoint
 *
 */
abstract class Piece extends Object implements PieceInterface
{

    const COLOR_BLACK = 0;
    const COLOR_WHITE = 1;

    const TYPE_KING = 0;
    const TYPE_QUEEN = 1;
    const TYPE_ROCK = 2;
    const TYPE_BISHOP = 3;
    const TYPE_KNIGHT = 4;
    const TYPE_PAWN = 5;



    private static $_typeNames = [
        self::TYPE_KING => "King",
        self::TYPE_QUEEN => "Queen",
        self::TYPE_ROCK => "Rock",
        self::TYPE_BISHOP => "Bishop",
        self::TYPE_KNIGHT => "Knight",
        self::TYPE_PAWN => "Pawn",
    ];

    private static $_htmlCodes = [
        self::COLOR_BLACK => [
            self::TYPE_KING => '&#9812;',
            self::TYPE_QUEEN => '&#9813;',
            self::TYPE_ROCK => '&#9814;',
            self::TYPE_BISHOP => '&#9815;',
            self::TYPE_KNIGHT => '&#9816;',
            self::TYPE_PAWN => '&#9817;',
        ],
        self::COLOR_WHITE => [
            self::TYPE_KING => '&#9818;',
            self::TYPE_QUEEN => '&#9819;',
            self::TYPE_ROCK => '&#9820;',
            self::TYPE_BISHOP => '&#9821;',
            self::TYPE_KNIGHT => '&#9822;',
            self::TYPE_PAWN => '&#9823;',
        ],
    ];

    private static $_cost = [
        self::TYPE_KING => 9999,
        self::TYPE_QUEEN => 9.5,
        self::TYPE_ROCK => 5,
        self::TYPE_BISHOP => 3.5,
        self::TYPE_KNIGHT => 3,
        self::TYPE_PAWN => 1,
    ];

    /**
     * @var Point
     */
    private $_point;
    /**
     * @var int
     */
    private $_color;

    /**
     * @var int
     */
    private $_type;


    /**
     * @return int[]
     */
    public static function getTypes()
    {
        return array_keys(self::$_typeNames);
    }

    /**
     * @param int $type
     * @throws \Exception
     */
    private function checkType(int $type)
    {
        if (!in_array($type, self::getTypes())) {
            throw new \Exception("Invalid type");
        }
    }

    /**
     * @param int $color
     * @throws \Exception
     */
    private function checkColor(int $color)
    {
        if ($color !== self::COLOR_WHITE || $color !== self::COLOR_BLACK) {
            throw new \Exception("Invalid color");
        }
    }

    /**
     * Figure constructor.
     * @param int $color
     * @param $type
     * @param $x
     * @param $y
     * @throws \Exception
     */
    public function __construct(int $color, $type, $x, $y)
    {
        $this->checkColor($color);
        $this->checkType($type);
        $this->_point = new Point($x, $y);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return self::$_typeNames[$this->_type];
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @return string
     */
    public function getHTMLCode()
    {
        return self::$_htmlCodes[$this->_color][$this->_type];
    }


    /**
     * @return float
     */
    public function getCost()
    {
        return self::$_cost[$this->_type];
    }

    /**
     * @return Point
     */
    public function getPoint()
    {
        return $this->_point;
    }

    public function getPointName()
    {
        return (string)$this->_point;
    }

    public function getNameWithPoint()
    {
        return $this->name . $this->pointName;
    }


}