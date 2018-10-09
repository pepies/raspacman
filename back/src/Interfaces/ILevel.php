<?php
namespace API;

/**
 * Level structure
 */
interface ILevel
{
    public function getStartingPosY();
    public function getStartingPosX();
    public function getMonsters();
    public function getDiamonds();
    public function getCoins();
    public function getStratingPos();
}
