<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 12.07.2016
 * Time: 12:40
 */
include_once('init.php');
$id = $cookie->get('id');
$hash = $cookie->get('hash');

if ($id) {
    $user_arr = $db->getWhere([
        'id' => $id,
        'hash' => $hash
    ], 'user');
    if ($user_arr) {
        $parser->render('views/setting_form.php',
            [
                'user_all' => $user_all
            ]);
    }else {
        $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/auth_form.php');
    }
}else {
    $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/auth_form.php');
}



$user_all = $user->get_user();
if(isset($_POST['close'])){
    $close = $_POST['close'];
    $close = 1;
    $close_f = $db->update(['close_file' => $close], 'user',['id' => $user_all['id']], true );
    $parser->render('views/alert_success.php', [
        'title' => 'Запись успешно сохранена!']);
}

