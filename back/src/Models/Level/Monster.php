<?php namespace rpman\Models;

use \rpman\Interfaces\IHasPosition;

/**
 * @Entity @Table(name="levels")
 **/
class Monster implements IHasPosition
{
    /** $x @Column(type="integer") */
    private $x;

    /** $y @Column(type="integer") */
    private $y;

    /** $y @Column(type="string") */
    private $direction;

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

    public function setStratingPos(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setDirection(string $direction)
    {
        $this->direction = $direction;
    }
}
