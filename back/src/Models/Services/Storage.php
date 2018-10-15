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
        $paths = array("../Entities");
        $isDevMode = false;
        $config = Setup::createAnnotationMetadataConfiguration(
            $paths,
            $isDevMode,
            null,
            null,
            false
        );
        $ini = parse_ini_file(__DIR__."/config.ini");
        $conn = array(
            'dbname' => $ini['db_name'],
            'user' => $ini['db_user'],
            'password' => $ini['db_pass'],
            'host' => $ini['db_host'],
            'port' => $ini['db_port'],
            'driver' => 'pdo_mysql',
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
