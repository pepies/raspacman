<?php namespace rpman\Models;

// use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="levels")
 **/
class Line
{
    /**
     * Many Lines have One Level.
     * @ManyToOne(targetEntity="LEvel", inversedBy="lines")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $level;
}
