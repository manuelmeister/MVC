<?php
/**
 * Created by PhpStorm.
 * User: manuelmeister
 * Date: 12.05.15
 * Time: 22:12
 */

namespace Meister\MVC\Model;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class Model {

    protected $entity_manager;

    function __construct()
    {
        $paths = array("Meister/MVC/Model");
        $isDevMode = false;

        // the connection configuration
        $dbParams = array(
            'url'   =>  'mysql://root:1234@127.0.0.1/guestbook'
        );

        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
        $this->entity_manager = EntityManager::create($dbParams, $config);

    }
}