<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 09.07.2016
 * Time: 12:39
 */
?>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<?php
include_once ('init.php');
$use = $user->register();
prn($use);
if(!is_array($use)){
    if($use === false){
        $parser->render('views/register_form.php');
    }
    else{
        //header('Location:/');
    }
}else{
    $parser->render('views/register_form.php');
}

