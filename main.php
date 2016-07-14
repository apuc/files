<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 12.07.2016
 * Time: 14:39
 */

$id = $cookie->get('id');
$hash = $cookie->get('hash');

$user_all = $user->get_user();

if ($_GET['user'] != $user_all['user_login'] or !isset($_GET['user'])) {
    $files = $db->getWhere(['user_login' => $_GET['user']], 'user', true);
    $files[0]['close_file'];
    if ($files[0]['close_file'] == 1) {
        echo 'Просмотр файлов запрещен';
        die();
    }
}

if (isset($_GET['logout'])) { //если была нажата кнопка Выход
    $cookie->set('id', '');
    $cookie->set('hash', '');
    $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/auth_form.php');
} else {
    if ($id) {
        $user_arr = $db->getWhere([
            'id' => $id,
            'hash' => $hash
        ], 'user');
        if ($user_arr) {
            $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/main.php');
        } else {
            $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/auth_form.php');
        }
    } else {
        $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/auth_form.php');
    }
}

