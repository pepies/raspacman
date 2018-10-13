<?php namespace rpman\Models\Level;

use \rpman\Interfaces\IHasPosition;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="monsters")
 **/
class Monster implements IHasPosition
{
    /** @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue **/
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="monsters")
     */
    private $level;

    /** $x
    * @ORM\Column(type="integer")
    */
    private $x;

    /** $y
    * @ORM\Column(type="integer")
    */
    private $y;

    /** $y
    * @ORM\Column(type="string")
    */
    private $direction;

    public function __construct(int $x, int $y, string $direction)
    {
        $this->setStratingPos($x, $y);
        $this->setDirection($direction);
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getDirection(): string
    {
        return $this->direction;
    }

    protected function setStratingPos(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    protected function setDirection(string $direction)
    {
        $this->direction = $direction;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }
}
