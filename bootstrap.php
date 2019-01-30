<?php

define('ROOT',realpath(__DIR__));

require_once ROOT."/vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


// chemin vers le répertoire des entités
$paths = array(realpath(__DIR__) . "/model");
$isDevMode = true;

// configuration de la source de donnée
$dbParams = array(
    'host'=> '127.0.0.1',
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'doctrine',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);
$loader = new Twig_Loader_Filesystem(ROOT.'/templates');
$twig = new Twig_Environment($loader, [
    'cache' =>ROOT.'/cache',
    'debug'=>true
]);