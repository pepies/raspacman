<?php namespace rpman\Models;

/**
 * @Entity @Table(name="levels")
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
}
