<?php
/**
 * Created by PhpStorm.
 * User: manuelmeister
 * Date: 12.05.15
 * Time: 14:48
 */

namespace Meister\MVC\Controller;


class Controller {

    public function index($name = __CLASS__)
    {
        echo "Testing" . $name;
    }

}