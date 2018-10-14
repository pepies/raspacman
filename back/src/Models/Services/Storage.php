<?php
namespace rpman\Models\Services;

use rpman\Models\Entities\Level as Level;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class Storage
{
    private $em;

    public function __construct()
    {
        $paths = array(__DIR__."/src");
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration(
            $paths,
            $isDevMode,
            null,
            null,
            false
        );

        $conn = array(
            /* back */  'path' => __DIR__ . '/../../../db.sqlite',
                        'driver' => 'pdo_sqlite'
        );
        $this->em = EntityManager::create($conn, $config);
        //debug
        // $em->getConnection()
        // ->getConfiguration()
        // ->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());
    }

    /**
    * @param Level $level
    * @return void
    */
    public function store(Level $level)
    {
        $this->em->persist($level);
        $this->em->flush();
    }

    /**
    * @param Level $level
    * @return void
    */
    public function remove(Level $level)
    {
        $this->em->remove($level);
        $this->em->flush();
    }

    /**
     * Selects one random level_id from database
     *
     * @return array
     */
    public function getRandomLevel(): array
    {
        $Repo = $this->em->getRepository('rpman\Models\Entities\Level');
        return $Repo->getRandomLevelAsArray();
    }
}
