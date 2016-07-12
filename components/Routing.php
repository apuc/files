<?php

/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 12.07.2016
 * Time: 14:19
 */
class Routing
{
    public $routes;
    private $parser;


    public function __construct()
    {
        global $parser;
        $this->parser = $parser;
    }

    public function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI']);
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        $uri_l = explode('/', $uri);

        if (empty($uri_l[1]) or $uri_l[1][0] == '?') {
            return 'main';
            //$this->parser->render($_SERVER['DOCUMENT_ROOT'] . '/main.php');
        }
        else{
            return $uri_l[1];
           // $this->parser->render($_SERVER['DOCUMENT_ROOT'] . '/'.$uri_l[1].'.php');
        }

    }
}