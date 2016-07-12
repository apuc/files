<?php

/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 09.07.2016
 * Time: 11:40
 */
class User
{
    public $db;
    public $cookie;
    public $current_user;


    function __construct()
    {
        global $db;
        global $cookie;
        $this->cookie = $cookie;
        $this->db = $db;
        $id = $this->cookie->get('id');
        if ($id) {
            $this->current_user = $id;
        } else {
            $this->current_user = false;
        }
    }

    public function register()
    {
        // Переменные для формы
        $user_login = '';
        $user_email = '';
        $pass = '';

        // Обработка формы
        if (isset($_POST['user_login'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $user_login = $_POST['user_login'];
            $user_email = $_POST['user_email'];
            $pass = $_POST['pass'];

            // Флаг ошибок
            $errors = false;

            if (empty($user_login) || strlen($user_login) < 3) {
                $errors[] = 'Логин должен быть не менее 3-х символов! Поле обязательно к заполнению!';
            }
            if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Неправильный email';
            }

            if (strlen($pass) < 6) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }


            if ($errors == false) {
                $pass = trim(md5($pass));

                $user = $this->db->insert([
                    'user_login' => $user_login,
                    'user_email' => $user_email,
                    'pass' => $pass,
                    'dt_add' => time(),

                ], 'user');
                return $user;
            }
            return $errors;
        }
    }

    public function auth()
    {

        if (isset($_POST['user_login'])) {
            $user_login = $_POST['user_login'];
            $pass = $_POST['pass'];

            $errors = false;

            if (empty($user_login) || strlen($user_login) < 3) {
                $errors[] = 'Логин должен быть не менее 3-х символов! Поле обязательно к заполнению!';
            }
            if (strlen($pass) < 6) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            //prn($errors);
            if ($errors == false) {
                $pass = trim(md5($pass));

                $user = $this->db->getWhere([
                    'user_login' => $user_login,
                    'pass' => $pass,
                ], 'user');
                //prn($user);
                if ($user) {

                    $hash = md5($this->generateCode());
                    $this->db->update(['hash' => $hash], 'user', ['id' => $user[0]['id']]);
                    $this->cookie->set('id', $user[0]['id']);
                    $this->cookie->set('hash', $hash);
                    return $user[0];
                }
                return false;

            }
        }

    }

    public function logout()
    {
        /*$cookie->set('id', '');
        $cookie->set('user_hash', '');
        $cookie->set('ip', '');*/
    }

    public function get_login()
    {

        $id = $this->cookie->get('id');
        $login = $this->db->getFromId($id, 'user');
        return $login['user_login'];
    }

    public function generateCode($length = 6)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clen = strlen($chars) - 1;
        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0, $clen)];
        }
        return $code;
    }

    public function get_path(){
        if(isset($_GET['user'])){
            if(!file_exists($_SERVER['DOCUMENT_ROOT'] . '/users/' . $_GET['user'] )){
                mkdir($_SERVER['DOCUMENT_ROOT'] . '/users/' . $_GET['user']);
            }
            return 'users/' . $_GET['user'];
        }
        else {
            return 'files';
        }
    }

}