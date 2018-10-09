<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
// $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);


//..
$conn = array(
    'user' => 'user',
    'password' => 'secret',
    'path' => __DIR__ . '/db.sqlite',
    'driver' => 'pdo_sqlite'
);
// $config = new \Doctrine\DBAL\Configuration();
// $conn = \Doctrine\DBAL\DriverManager::getConnection($conn, $config);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
