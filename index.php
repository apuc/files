<?php
require_once('init.php');
//prn($_SERVER);
$id = $cookie->get('id');
$hash = $cookie->get('hash');

if ($id) {
    $user = $db->getWhere([
        'id' => $id,
        'hash' => $hash
    ], 'user');
    if ($user) {
        $parser->render($_SERVER['DOCUMENT_ROOT'].'/views/main.php');
    } else {
        $parser->render($_SERVER['DOCUMENT_ROOT'].'/views/auth_form.php');
    }
} else {
    $parser->render($_SERVER['DOCUMENT_ROOT'].'/views/auth_form.php');
}



