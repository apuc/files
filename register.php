<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 09.07.2016
 * Time: 12:39
 */

include_once ('init.php');
$use = $user->register();

if(!is_array($use)){
    header('Location:/');
}else{
    $parser->render('views/register_form.php', ['errors' => $use]);

}

