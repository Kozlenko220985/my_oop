<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16.09.2017
 * Time: 14:55
 * В класс Car из предыдущих заданий добавить методы showBrand(), showModel() которые выводят на экран значения свойств
 * brand, model соответственно. В класс User из предыдущих заданий добавить свойство isLogged, которое принимает true,
 * если пользователь успешно авторизировался, и false при выходе из системы. Задать значения для этого свойства в
 * методах login(), logout().
 */

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;

    public function showBrand()
    {
        echo $this->brand;

    }

    public function showModel()
    {
        echo $this->model;
    }
}

$mazda = new Car;
$mazda->brand = 'Mazda';
$mazda->model = 6;

$mers = new Car;
$mers->brand = 'Mersedes';
$mers->model = 'E 220';

var_dump($mazda->showBrand());
echo '<br>';
var_dump($mers->showBrand());
echo '<br>';

class User
{
    public $login;
    public $password;
    public $email;
    public $raiting = 0;
    public $isLogged;

    public function login()
    {
        if (($this->isLogged) == true) {
            echo $this->isLogged;
        } else {
            echo $this->logout();
        }
    }

    public function logout()
    {
        echo "$this->name вышел из системы";
    }

}

$vasya = new User;
$vasya->name = 'Vasya';
$vasya->isLogged = 0    ;

var_dump($vasya->login());

