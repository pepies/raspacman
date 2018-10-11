<?php
namespace API;

/**
 * @Entity @Table(name="levels")
 **/
class Level implements \API\ILevel
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $json;

    public function getId()
    {
        return $this->id;
    }

    // Lines
    public function getLines()
    {
    }
    public function setLines()
    {
    }
    // Monsters
    public function getMonsters()
    {
    }
    public function setMonsters()
    {
    }
    // Diamonds
    public function getDiamonds()
    {
    }
    public function setDiamonds()
    {
    }
    // Coins
    public function getCoins()
    {
    }
    public function setCoins()
    {
    }
    // Strarting position
    public function getStratingPos()
    {
    }
    public function setStratingPos()
    {
    }
}
