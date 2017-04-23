<?php

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/database.php';

$config = Setup::createYAMLMetadataConfiguration([__DIR__ . '/Mapping'], true, __DIR__ . '/../var/doctrine/proxy');
$entityManager = EntityManager::create(
    [
        'driver' => $databaseDriver,
        'user' => $databaseUser,
        'password' => $databasePassword,
        'dbname' => $databaseName,
    ],
    $config
);
