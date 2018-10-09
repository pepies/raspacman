<?php
namespace API;

/**
 * @Entity @Table(name="levels")
 **/
class Level implements \API\ILevel
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $json;

    public function getId()
    {
        return $this->id;
    }

    public function getJson()
    {
        return $this->json;
    }

    public function setJson($json)
    {
        $this->json = $json;
    }
}
