<?php namespace rpman\Models\Level;

use \rpman\Interfaces\IHasPosition;

/**
 * @Entity @Table(name="levels")
 **/
class Monster implements IHasPosition
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** $x @Column(type="integer") */
    private $x;

    /** $y @Column(type="integer") */
    private $y;

    /** $y @Column(type="string") */
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
}
