<?php namespace rpman\Models\Entities;

use \rpman\Interfaces\IHasPosition;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="diamonds")
 **/
class Diamond implements IHasPosition
{
    /** @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    **/
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="diamonds")
     */
    private $level;

    /** $x @ORM\Column(type="integer") */
    private $x;

    /** $y @ORM\Column(type="integer") */
    private $y;

    public function __construct(int $x, int $y)
    {
        $this->setPosition($x, $y);
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setPosition(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }
}
