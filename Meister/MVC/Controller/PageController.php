<?php
/**
 * Created by PhpStorm.
 * User: manuelmeister
 * Date: 12.05.15
 * Time: 18:30
 */

namespace Meister\MVC\Controller;

use Meister\MVC\Model\Article;
use Meister\MVC\View\PageView;

class PageController extends Controller{

    public function index($param = array())
    {
        $article = new Article();
        $article->setTitle('Dini mueter');
        $pageview = new PageView($param);
    }

}