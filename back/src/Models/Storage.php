<?php
namespace rpman\Models;

use rpman\Models\Level\Level as Level;
use Doctrine\ORM\EntityManager;

class Storage
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    /**
    * Store user created *and validated* level
    *
    * @param Level $level
    * @return void
    */
    public function store(Level $level)
    {
        $this->em->persist($level);
        $this->em->flush();
    }

    public function list()
    {
        $levelsRepository = $this->em->getRepository('Level');
        $levels = $levelsRepository->findAll();

        foreach ($levels as $level) {
            echo sprintf("-%s\n", $level->getID() . " " . $level->getName());
        }
    }
}
