<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 09.07.2016
 * Time: 11:14
 */
require_once ('function/debug.php');
require_once ('lib/Parser.php');
require_once ('lib/Db.php');
require_once ('lib/Cookie.php');
require_once ('lib/Config.php');
require_once ('lib/User.php');

$cookie = new Cookie();
$parser = new Parser();
$config = new Config();
$db = new Db();

require_once ('function/tpl.php');

$user = new User();