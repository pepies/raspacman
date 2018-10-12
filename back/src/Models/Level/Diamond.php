<?php namespace rpman\Models\Level;

use \rpman\Interfaces\IHasPosition;

/**
 * @Entity @Table(name="diamonds")
 **/
class Diamond implements IHasPosition
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** $x @Column(type="integer") */
    private $x;

    /** $y @Column(type="integer") */
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
}
