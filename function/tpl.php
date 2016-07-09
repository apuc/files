<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 09.07.2016
 * Time: 12:46
 */

function getHeader()
{
    global $parser;
    $parser->render('views/header.php');
}

function getFooter()
{
    global $parser;
    $parser->render('views/footer.php');
}