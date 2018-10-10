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

    public function getLines()
    {
    }
    public function getMonsters()
    {
    }
    public function getDiamonds()
    {
    }
    public function getCoins()
    {
    }
    public function getStratingPos()
    {
    }
}
