<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("Meister/MVC/Model");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'url'   =>  'mysql://root:1234@127.0.0.1/guestbook'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);