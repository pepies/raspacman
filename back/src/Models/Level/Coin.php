<?php namespace rpman\Models\Level;

use \rpman\Interfaces\IHasPosition;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity @ORM\Table(name="coins")
 **/
class Coin implements IHasPosition
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    protected $id;

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

    protected function setPosition(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
