<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16.09.2017
 * Time: 14:45
 * Создать массив, который описывает сообщение ключами name, email, message с соответствующими значениями.
 * Привести массив к объекту. Проанализировать результат при помощи var_dump.
 */

$arr = [
    'name'    => 'Vasys',
    'email'   => 'Vasya@mail.ru',
    'message' => 'Hi'
];

var_dump((object)$arr);
echo '<br>';

class User{
    public $name;
}

$igor = new User;
$igor->name = 'Igor';

var_dump((array)$igor);
echo '<br>';

$arr1 = ['bvg','sjff','jff'];

$obj = (object)$arr1;
var_dump($obj);
