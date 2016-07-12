<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 12.07.2016
 * Time: 11:25
 */
include_once('init.php');
$id = $cookie->get('id');
$hash = $cookie->get('hash');
$user_all = $user->get_user();
if ($id) {
    $user_arr = $db->getWhere([
        'id' => $id,
        'hash' => $hash
    ], 'user');
    if ($user_arr) {
        $parser->render('views/profile_form.php',
            [
                'user_all' => $user_all,
            ]);
    }else {
        $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/auth_form.php');
    }
}else {
    $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/auth_form.php');
}


if(isset($_POST['user_email'])){

    $email = $_POST['user_email'];
    $pass = $_POST['pass'];
    $pass = (empty($pass)) ? $user_all['pass'] : trim(md5($pass));

   $update = $db->update([
       'user_email' => $email,
       'pass' => $pass
   ], 'user', [
       'id' => $user_all['id']
   ], true);

    $parser->render('views/alert_success.php', [
        'title' => 'Запись успешно сохранена!']);
}
$user_all = $user->get_user();


