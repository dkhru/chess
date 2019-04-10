<?php
/**
 * Author: dkh
 * Date: 2019-04-10
 * Time: 13:05
 * Project: Chess
 */

namespace dkhru\chess;


interface PieceInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return int
     */
    public function getType();

    /**
     * @return int
     */
    public function getHTMLCode();

    /**
     * @return Point
     */
    public function getPoint();

    /**
     * @return float
     */
    public function getCost();

    /**
     * @return string
     */
    public function getPointName();

    /**
     * @return string
     */
    public function getNameWithPoint();


    /**
     * @return []Point
     */
    public function getPossibleMovies();


    public function moveToPoint(Point $point);

}