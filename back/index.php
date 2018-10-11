<?php

//Composer

include __DIR__ . '/vendor/autoload.php';

use rpman\objects\Http;
use rpman\objects\Level;
use rpman\objects\Storage;


// Doctrine

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
// $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

$conn = array(
    'user' => 'user',
    'password' => 'secret',
    'path' => __DIR__ . '/db.sqlite',
    'driver' => 'pdo_sqlite'
);
$entityManager = EntityManager::create($conn, $config);
