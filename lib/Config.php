<?php

/**
 * Created by PhpStorm.
 * User: apuc0
 * Date: 25.05.2016
 * Time: 12:04
 */
class Config
{

    public function db()
    {
        return [
            'host' => 'localhost',
            'user' => 'root',
            'pass' => '',
            'db' => 'files',
            'charset' => 'utf8',

        ];
    }

    public function routing(){
        return [
            'admin-panel' => 'k-admin',
        ];
    }

    public function user()
    {
        return [
            'rule' => 'user',
        ];
    }

}