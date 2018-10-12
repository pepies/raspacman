<?php
namespace rpman\Models;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="levels")
 **/
class Level implements ILevel
{
      
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /**
     * One LEvel has One Character.
     * @OneToOne(targetEntity="Character")
     * @JoinColumn(name="Character_id", referencedColumnName="id")
     */
    protected $character;

    /**
     * One level have Many lines.
     * @var Collection
     * @OneToMany(targetEntity="Line", mappedBy="level")
     */
    protected $lines;

    /**
     * One level have Many monsters.
     * @var Collection
     * @OneToMany(targetEntity="Monster", mappedBy="level")
     */
    protected $monsters;

    /**
    * One level have Many diamonds.
    * @var Collection
    * @OneToMany(targetEntity="Diamond", mappedBy="level")
    */
    protected $diamonds;

    /**
     * One level have Many coins.
     * @var Collection
     * @OneToMany(targetEntity="Coin", mappedBy="level")
     */
    protected $coins;

    public function __construct()
    {
        $this->lines = new ArrayCollection();
        $this->monsters = new ArrayCollection();
        $this->diamonds = new ArrayCollection();
        $this->coins = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    // Lines
    public function getLines()
    {
        $this->lines;
    }
    
    // Monsters
    public function getMonsters()
    {
        $this->monsters;
    }
    
    // Diamonds
    public function getDiamonds()
    {
        $this->diamonds;
    }
    
    // Coins
    public function getCoins()
    {
        $this->coins;
    }
}
