<?php
namespace rpman\Interfaces;

/**
 * Alive/static entity that can be desribed by its starting position
 */
interface IHasPosition
{
    public function getX();
    public function getY();
}
