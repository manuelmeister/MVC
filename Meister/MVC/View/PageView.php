<?php
/**
 * Created by PhpStorm.
 * User: manuelmeister
 * Date: 12.05.15
 * Time: 20:55
 */

namespace Meister\MVC\View;


class PageView extends View{

    function __construct($param)
    {
        parent::__construct();

        $template = $this->twig->loadTemplate("page.twig");
        echo $template->render(array(
            'site'  =>  array(
                'title' => 'Blog'
            ),
            'navigation'    =>  array(
                'home'  => array(
                    'href'      =>  "#",
                    "caption"   =>  "Home"
                ),
                'about'  => array(
                    'href'      =>  "#",
                    "caption"   =>  "About us"
                )
            ),
            'article'   =>  array(
                'id'    =>  ( (isset($param['slug']))?'1':$param['id'] ),
                'title' =>  ( (isset($param['slug']))?$param['slug']:'title' ),
                'excerpt'   =>  'Test, Lorem impsufmsd'
            )
        ));
    }
}