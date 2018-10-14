<?php namespace rpman\Models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inversed side for Level
 * @ORM\Entity
 * @ORM\Table(name="lines")
 **/
class Line
{
    /** @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue
    **/
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="lines")
     */
    private $level;

    /** $start_x
    * @ORM\Column(type="integer")
    */
    private $start_x;

    /** $start_y
    * @ORM\Column(type="integer")
    */
    private $start_y;

    /** $end_x
    * @ORM\Column(type="integer")
    */
    private $end_x;

    /** $end_y
    * @ORM\Column(type="integer")
    */
    private $end_y;

    public function __construct(
        int $start_x,
        int $start_y,
        int $end_x,
        int $end_y
    ) {
        $this->setCoordinates($start_x, $start_y, $end_x, $end_y);
    }

    public function getCoordinates()
    {
        return [
            $this->start_x,
            $this->start_y,
            $this->end_x,
            $this->end_y
        ];
    }

    public function setCoordinates(int $start_x, int $start_y, int $end_x, int $end_y)
    {
        $this->start_x = $start_x;
        $this->start_y = $start_y;
        $this->end_x = $end_x;
        $this->end_y = $end_y;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }
}
