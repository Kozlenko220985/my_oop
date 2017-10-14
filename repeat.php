<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 17.09.2017
 * Time: 12:37
 */

class User{
    public $name;
    public $email;
    public $raiting = 0;
    public $login;
    public $isLoged;

    public function login($isLoged){
        $this->isLoged = $isLoged;
        if ($this->isLoged){
            echo "$this->name is $this->login";
        }else{
           return $this->logout();

        }
    }
    public function logout(){
        echo "$this->name go out";
    }

}

$roma = new User;
$roma->name = 'Roma';
$roma->email = 'roma@mail.ru';
$roma->login = 'roma@mail.ru';
$roma->raiting = 1;

var_dump($roma->login(0));
echo '<br>';

class Car{
    public $brand;
    public $model;
    public $year;
    public $driver;
    private $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        is_numeric($price) ? $this->price = round($price, 2) : 'введите число';
    }

    public function showBrand(){
        echo "$this->brand";
        echo $this->showModel();
    }
    public function showModel(){
        echo "$this->model";
    }
}
$toyota = new Car;
$toyota->brand = 'Toyota';
$toyota->model = 'Yaris';
$toyota->year = 2000;
$toyota->driver = $roma;
$toyota->setPrice(99.99);

var_dump($toyota);

$mazda = new Car;
$mazda->brand = 'Mazda';
$mazda->model = 6;
$mazda->year = 2000;
$mazda->driver = 'Kirov A.F';

var_dump($toyota->showBrand(),$mazda->showBrand());
echo '<br>';

$arr = ['name'=>1,'email'=>3,'rep'=>5];
$obj = (object)$arr;
$obj->name = 'Vasya';
var_dump($obj);

echo '<br>';

class WaterCar extends Car{
    public $whaterSpeed;
}

$enzo = new WaterCar;
$enzo->brand = 'Ferarri';
$enzo->whaterSpeed = 220;
$enzo->setPrice(200000.00);
var_dump($enzo);

class Users{
    protected $name;
    protected $email;
    protected $age;

}

class Meneger extends Users{

    public function addMeneger($name,$email,$age){
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;

    }
}

class Admin extends Users{

    public function addAdmin($name,$email,$age){
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
}


$manager = new Meneger;
$manager->addMeneger('Andrey','Andrey@mail.ru',26);
var_dump($manager);

$admin = new Admin;
$admin->addAdmin('Roma','Roma@mail.ru',35);
var_dump($admin);

$admin1 = clone $admin;
$admin1->addAdmin('Igor','Igor@mail.ru',30);
var_dump($admin1);






