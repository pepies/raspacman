<?php

require_once "vendor/autoload.php";

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

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
    'path' => __DIR__ . '/db.sqlite',
    'driver' => 'pdo_sqlite'
);
$em = EntityManager::create($conn, $config);

//debug
// $em->getConnection()
// ->getConfiguration()
// ->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());
