<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16.09.2017
 * Time: 14:36
 * Для класса User из предыдущего занятия создать методы login(), logout(),
 * которые просто выводят на экран соответствующее сообщение. Создать экземпляр класса, вызвать созданные методы.
 */
interface UserLogin
{
    public function login();
}

interface UserLogout
{
    public static function logout();
}

class User implements UserLogin,UserLogout
{
    public $login;
    public $password;
    static public $email;
    public $raiting = 0;

    public function login()
    {
        echo "$this->email Login";
    }

    public static function logout()
    {
        echo self::$email . "Logout";
    }

}

$vasya = new User;
$vasya->login() . '<br>';
$vasya->logout();