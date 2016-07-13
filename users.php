<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 13.07.2016
 * Time: 15:01
 */

$id = $cookie->get('id');
$hash = $cookie->get('hash');
$user_all = $user->get_user();

if (isset($_GET['del'])) {
    $db->queryDelete('user', $_GET['del']);
    $parser->render('views/alert_success.php', [
        'title' => 'Пользователь успешно удален!']);
}
if ($id) {
    $user_arr = $db->getWhere([
        'id' => $id,
        'hash' => $hash
    ], 'user');
    if ($user_arr) {
        $parser->render('views/all_users_form.php',
            [
                'user_all' => $user_all,
            ]);
    }else {
        $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/auth_form.php');
    }
}else {
    $parser->render($_SERVER['DOCUMENT_ROOT'] . '/views/auth_form.php');
}

