<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 12.07.2016
 * Time: 11:25
 */
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
    $photo = $_POST['photo'];
    if (is_uploaded_file($_FILES["photo"]["tmp_name"])) {
        // Если загружалось, переместим его в нужную папке, дадим новое имя
        move_uploaded_file($_FILES["photo"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/".$user_all['user_login'].".png");
    }
   $update = $db->update([
       'user_email' => $email,
       'pass' => $pass,
       'photo' => $photo
   ], 'user', [
       'id' => $user_all['id']
   ], true);


    $parser->render('views/alert_success.php', [
        'title' => 'Запись успешно сохранена!']);
}
$user_all = $user->get_user();


