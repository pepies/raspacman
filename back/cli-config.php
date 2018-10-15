<?php
// cli-config.php
require_once "bootstrap.php";

// bad setting caused really lot of troubles here

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$paths = array(__DIR__."/src/Models/Entities");
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(
    $paths,
    $isDevMode,
    null,
    null,
    false
);

$ini = parse_ini_file("./config.ini");
        $conn = array(
            'dbname' => $ini['dbname'],
            'user' => $ini['user'],
            'password' => $ini['pass'],
            'host' => $ini['host'],
            'driver' => 'pdo_mysql',
        );
$em = EntityManager::create($conn, $config);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);
