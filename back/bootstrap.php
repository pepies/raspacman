<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$paths = array(__DIR__."/src/Interfaces", __DIR__."/src/Models");
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(
    $paths,
    $isDevMode,
    null,
    null,
    false
);
$config->addEntityNamespace('Level', 'rpman\Models\Level\Level');
$config->addEntityNamespace('Character', 'rpman\Models\Level\Character');

$conn = array(
    'user' => 'user',
    'password' => 'secret',
    'path' => __DIR__ . '/db.sqlite',
    'driver' => 'pdo_sqlite'
);
$em = EntityManager::create($conn, $config);
// $this->em->getConnection()
// ->getConfiguration()
// ->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());
