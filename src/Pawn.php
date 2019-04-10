<?php
/**
 * Author: dkh
 * Date: 2019-04-10
 * Time: 14:55
 * Project: Chess
 */

namespace dkhru\chess;


class Pawn extends Piece
{
    public function __construct(int $color, $x, $y)
    {
        parent::__construct($color, self::TYPE_PAWN, $x, $y);
    }

    /**
     * @return []Point
     */
    public function getPossibleMovies()
    {
        // TODO: Implement getPossibleMovies() method.
    }

    public function moveToPoint(Point $point)
    {
        // TODO: Implement moveToPoint() method.
    }
}