<?php
// cli-config.php
require_once "bootstrap.php";
include("./creditials.php");

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

$conn = array(
    'user' => USERNAME,
    'password'=>PASSWORD,
    'path' => PATH,
    'driver' => 'pdo_sqlite'
);
$em = EntityManager::create($conn, $config);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);
