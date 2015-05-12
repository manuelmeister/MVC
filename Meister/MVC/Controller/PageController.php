<?php
/**
 * Created by PhpStorm.
 * User: manuelmeister
 * Date: 12.05.15
 * Time: 18:30
 */

namespace Meister\MVC\Controller;


class PageController extends Controller{

    public function index($param = array())
    {
        var_dump($param);
        echo "<div class='entry'><h2>Artikel ".( (isset($param['slug']))?$param['slug']:$param['id'] ). "</h2></div>";
    }

}