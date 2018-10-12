<?php
namespace rpman\Models;

// use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="levels")
 **/
class Level implements ILevel
{
      
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** $x @Column(type="integer") */
    protected $x;

    /** $y @Column(type="integer") */
    protected $y;

    /**
     * One level have Many lines.
     * @var Collection
     * @OneToMany(targetEntity="Line", mappedBy="level")
     */
    protected $lines;

    public function __construct()
    {
        $this->lines = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    // Lines
    public function getLines()
    {
        $this->$lines;
    }
    
    // Monsters
    public function getMonsters()
    {
    }
    
    // Diamonds
    public function getDiamonds()
    {
    }
    
    // Coins
    public function getCoins()
    {
    }
    
    // Strarting position
    public function getStratingPos()
    {
    }
    public function setStratingPos(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
