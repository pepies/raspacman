<?php
namespace rpman\Models;

use rpman\Models\Level\Level as Level;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class Storage
{
    private $em;

    public function __construct()
    {
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(
            array(__DIR__."/src"),
            $isDevMode
        );

        $conn = array(
            'user' => 'user',
            'password' => 'secret',
            'path' => __DIR__ . '/db.sqlite',
            'driver' => 'pdo_sqlite'
        );
        $this->em = EntityManager::create($conn, $config);
    }
    /**
    * Store user created and validated level
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
