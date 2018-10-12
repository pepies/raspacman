<?php
namespace rpman\Models;

class Storage
{
    /**
    * Store user created and validated level
    *
    * @param iLevel $level
    * @return void
    */
    public function store(iLevel $level)
    {
        $entityManager->persist($level);
        $entityManager->flush();
    }

    public function list()
    {
        $levelsRepository = $entityManager->getRepository('Level');
        $levels = $levelsRepository->findAll();

        foreach ($levels as $level) {
            echo sprintf("-%s\n", $level->getID() . " " . $level->getName());
        }
    }
}
