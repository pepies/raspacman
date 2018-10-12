<?php namespace rpman\Models\Level;

use \rpman\Interfaces\IHasPosition;

/**
 * @Entity @Table(name="levels")
 **/
class Character implements IHasPosition
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

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

    public function __construct(int $x = 50, int $y = 50)
    {
        $this->setStratingPos($x, $y);
    }

    public function setStratingPos(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}
