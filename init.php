<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 09.07.2016
 * Time: 11:14
 */
include_once ('components/Routing.php');
include_once ('function/debug.php');
include_once ('lib/Parser.php');

include_once ('lib/Db.php');
include_once ('lib/Cookie.php');
include_once ('lib/Config.php');
include_once ('lib/User.php');



$cookie = new Cookie();
$parser = new Parser();
$config = new Config();
$db = new Db();

include_once ('function/tpl.php');

$user = new User();
include_once ('function/user.php');
$routes = new Routing();