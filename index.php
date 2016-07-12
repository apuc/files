<?php
require_once('init.php');


$uri = $routes->run();
if(file_exists($_SERVER['DOCUMENT_ROOT'] . '/' . $uri . '.php')){
    include($_SERVER['DOCUMENT_ROOT'] . '/' . $uri . '.php');
}
else{
    echo 'Страница не найдена!';
}


