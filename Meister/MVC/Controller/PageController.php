<?php
/**
 * Created by PhpStorm.
 * User: manuelmeister
 * Date: 12.05.15
 * Time: 18:30
 */

namespace Meister\MVC\Controller;

use Meister\MVC\View\PageView;

class PageController extends Controller{

    public function index($param = array())
    {
        $pageview = new PageView($param);
    }

}