<?php
require_once 'vendor/autoload.php';
require_once 'src/MyController.php';
require_once 'src/Entity/User.php';
require_once 'src/Entity/Country.php';
require_once 'src/Entity/Repository/UserRepository.php';
require_once 'src/Entity/Repository/CountryRepository.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__ . "/src/Entity");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver' => 'pdo_mysql',
    'user' => 'fest',
    'password' => 'fest',
    'dbname' => 'codeit',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);



