<?php
/**
 * Created by PhpStorm.
 * User: Nancy
 * Date: 11.07.2016
 * Time: 15:32
 */
function user_get_login(){
    global $user;
    return $user->get_login();
}
function user_get_user(){
    global $user;
    return $user->get_user();

}