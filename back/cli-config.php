<?php
// cli-config.php
require_once "bootstrap.php";
// Should I inject Storage class here instead copy content?
// or its depends on personal setup ?
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
    /* back */  'path' => __DIR__ . '/../../../db.sqlite',
                'driver' => 'pdo_sqlite'
);
$em = EntityManager::create($conn, $config);

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);
