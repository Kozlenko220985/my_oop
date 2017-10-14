<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 16.09.2017
 * Time: 14:11
 * Создать класс Car. Записать в этот класс свойства brand, model, year, driver. Создать экземпляры машин Toyota Corolla
 * (2000), Mazda 6 (2015), Ford Taurus (1995) . В рамках предыдущего задания создать экземпляры класса User для
 * нескольких пользователей системы. В свойство driver объектов класса Car записать объекты класса User. Вывести
 * объекты класса Car на экран при помощи var_dump(), print_r()
 */

class Car
{
    public $brand;
    public $model;
    public $year;
    public $driver;
}

class User
{
    public $name;
    public $age;
}

$vasya = new User;
$vasya->name = 'Vasya';
$vasya->age = 34;


$toyota = new Car;
$mazda = new Car;
$ford = new Car;

$toyota->brand = 'Toyota';
$toyota->model = 'Corolla';
$toyota->year = 2000;

$mazda->brand = 'Mazda';
$mazda->model = 6;
$mazda->year = 2015;

$ford->brand = 'Ford';
$ford->model = 'Taurus';
$ford->year = 1995;

$toyota->driver = $vasya;

var_dump($toyota);

print_r($toyota);