<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 09.07.2016
 * Time: 13:15
 */

include_once ('init.php');
$use = $user->auth();
if(isset($use['id'])){
    header('Location:/');
}else{
    $parser->render('views/auth_form.php');
}
