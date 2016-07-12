<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 12.07.2016
 * Time: 14:39
 */

$id = $cookie->get('id');
$hash = $cookie->get('hash');
if (isset($_GET['logout'])) { //если была нажата кнопка Выход
    $cookie->set('id', '');
    $cookie->set('hash', '');
    $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/auth_form.php');
}else {
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