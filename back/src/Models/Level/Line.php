<?php namespace rpman\Models;

/**
 * @Entity @Table(name="lines")
 **/
class Line
{
    /**
     * Many Lines have (belongs to) One Level.
     * @ManyToOne(targetEntity="LEvel", inversedBy="lines")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $level;

    /** $start_x @Column(type="integer") */
    private $start_x;

    /** $start_y @Column(type="integer") */
    private $start_y;

    /** $end_x @Column(type="integer") */
    private $end_x;

    /** $end_y @Column(type="integer") */
    private $end_y;

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
}
