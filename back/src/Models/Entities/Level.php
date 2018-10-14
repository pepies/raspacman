<?php namespace rpman\Models\Entities;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="rpman\Repositories\LevelRepository")
 * @ORM\Table(name="levels")
 **/
class Level implements \rpman\Interfaces\ILevel
{
      
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    **/
    protected $id;

    /**
     * One Level has One Player Character.
     * @var Character
     * @ORM\OneToOne(targetEntity="Character", cascade={"all"})
     * @ORM\JoinColumn(nullable=false)
     */
    protected $character;

    /**
     * One level have Many lines.
     * @var Collection
     * @ORM\OneToMany(targetEntity="Line", mappedBy="level", cascade={"all"})
     * @ORM\JoinColumn(nullable=false)
     */
    protected $lines;

    /**
     * One level have Many monsters.
     * @var Collection
     * @ORM\OneToMany(targetEntity="Monster", mappedBy="level", cascade={"all"})
     * @ORM\JoinColumn(nullable=false)
     */
    protected $monsters;

    /**
    * One level have Many diamonds.
    * @var Collection
    * @ORM\OneToMany(targetEntity="Diamond", mappedBy="level", cascade={"all"})
     * @ORM\JoinColumn(nullable=false)
    */
    protected $diamonds;

    /**
     * One level have Many coins.
     * @var Collection
     * @ORM\OneToMany(targetEntity="Coin", mappedBy="level", cascade={"all"})
     * @ORM\JoinColumn(nullable=false)
     */
    protected $coins;

    public function __construct()
    {
        $this->lines = new ArrayCollection;
        $this->monsters = new ArrayCollection;
        $this->diamonds = new ArrayCollection;
        $this->coins = new ArrayCollection;
        $this->character = new Character;
    }

    public function getId()
    {
        return $this->id;
    }

    //character
    public function getCharacter(): Collection
    {
        return $this->character;
    }
    public function setCharacter(int $x, int $y)
    {
        $this->character->setStratingPos($x, $y);
    }

    // Lines
    public function getLines(): Collection
    {
        return  $this->lines;
    }

    public function addLine(Line $line)
    {
        $this->lines->add($line);
        $line->setLevel($this);
    }
    
    // Monsters
    public function getMonsters(): Collection
    {
        return $this->monsters;
    }

    public function addMonster(Monster $monster)
    {
        $this->monsters->add($monster);
        $monster->setLevel($this);
    }
    
    // Diamonds
    public function getDiamonds(): Collection
    {
        return $this->diamonds;
    }

    public function addDiamond(Diamond $diamond)
    {
        $this->diamonds->add($diamond);
        $diamond->setLevel($this);
    }
    
    // Coins
    public function getCoins(): Collection
    {
        return  $this->coins;
    }
    public function addCoin(Coin $coin)
    {
        $this->coins->add($coin);
        $coin->setLevel($this);
    }
}
