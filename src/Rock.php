<?php
/**
 * Author: dkh
 * Date: 2019-04-10
 * Time: 14:43
 * Project: Chess
 */

namespace dkhru\chess;


class Rock extends Piece
{
    public function __construct(int $color, $x, $y)
    {
        parent::__construct($color, Piece::TYPE_ROCK, $x, $y);
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