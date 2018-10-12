<?php namespace rpman\Models;

use \rpman\Interfaces\IHasPosition;

/**
 * @Entity @Table(name="coins")
 **/
class Diamond implements IHasPosition
{
    /** $x @Column(type="integer") */
    private $x;

    /** $y @Column(type="integer") */
    private $y;

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
}
