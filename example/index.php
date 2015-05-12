<?php
/**
 * Created by PhpStorm.
 * User: manuelmeister
 * Date: 12.05.15
 * Time: 17:59
 */

include __DIR__.'/../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$file = __DIR__ . "/routing.yaml";
$request = new Meister\MVC\Controller\RequestHandler($uri,$file);
$controller = $request->getController();
$method = $request->getMethod();
$param = $request->getParam();
$controller->$method($param);