<?php namespace rpman\Models\Level;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="levels")
 **/
class Level implements \rpman\Interfaces\ILevel
{
      
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /**
     * One Level has One Character.
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
        $this->character = new \rpman\Models\Level\Character();
    }

    public function getId()
    {
        return $this->id;
    }

    //character
    public function getCharacter(): ArrayCollection
    {
        return $this->character;
    }
    public function setCharacter(int $x, int $y)
    {
        $this->character->setStratingPos($x, $y);
    }

    // Lines
    public function getLines(): ArrayCollection
    {
        return  $this->lines;
    }

    public function addLine(Line $line)
    {
        $this->lines->add($line);
    }
    
    // Monsters
    public function getMonsters(): ArrayCollection
    {
        return $this->monsters;
    }

    public function addMonster(Monster $monster)
    {
        $this->monsters->add($monster);
    }
    
    // Diamonds
    public function getDiamonds(): ArrayCollection
    {
        return $this->diamonds;
    }

    public function addDiamond(Diamond $diamond)
    {
        $this->diamonds->add($diamond);
    }
    
    // Coins
    public function getCoins(): ArrayCollection
    {
        return  $this->coins;
    }
    public function addCoin(Coin $coin)
    {
        $this->coins->add($coin);
    }
}
