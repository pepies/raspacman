<?php
namespace rpman\Interfaces;

/**
 * Level structure
 * Is this ok for SOLID? Or should I make hasLins, hasMonsters interfaces ?
 */
interface ILevel
{
    public function getLines();
    public function getMonsters();
    public function getDiamonds();
    public function getCoins();
    public function getStratingPos();
}
