<?php
/**
 * Created by PhpStorm.
 * User: manuelmeister
 * Date: 12.05.15
 * Time: 17:15
 */

namespace Meister\MVC\Controller;

use Meister\MVC\Controller;
use Symfony\Component\Yaml\Parser;

class RequestHandler {

    private $url;
    private $routing_table;
    private $parser;
    private $route;

    function __construct($url,$routing_file)
    {
        $this->url = $url;
        $routing = file_get_contents($routing_file);
        $this->parser = new Parser();
        $this->routing_table = $this->parser->parse($routing);
        $this->setRoute();
    }

    private function setRoute(){
        foreach ($this->routing_table as $route) {
            if( preg_match($route['match'],$this->url,$route['params']) ){
                $this->route = $route;
                return true;
            }
        }
        throw new \Exception("No Match: " . $this->url,0);
    }

    public function getController(){
        $controller = '\\Meister\\MVC\\Controller\\'.$this->route['controller'];
        return new $controller;
    }

    public function getMethod(){
        return $this->route['method'];
    }

    public function getParam()
    {
        return $this->route['params'];
    }

}