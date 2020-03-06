<?php

class Car{

    public $doors = 2;      // public - anywhere
    var $supercharger = 2;  // var -anywhere
    var $speed = 0;
    protected $engine = "7L V8";    // protected - parent and child class only
    private $hood = true;   // private - parent class only
    static $wheels = 4;     // static - property of class not instance 

    // Constructor
    function __construct(){
        echo "Car Turned ON <br>";
    }

    function MoveWheels(){
        echo 'Wheels moving';
        $this->speed = 100;
    }

    function IncWheels(){
        Car::$wheels = 8;
        echo "Wheels Increased";
    }
}

class Plane extends Car{

    var $doors = 4;
    var $supercharger =10;

    function __construct(){
        echo "Plane Turned ON <br>";
    }
    
    function FlyPlane(){
        echo 'Plane Flying';
        $this->speed=500;
    }
}
// if (class_exists("Car")) {
//     echo "Class exists";
// }else{
//     echo "Class doesn't exists";
// }

// if (method_exists('Car','MoveWheels')) {
//     echo "Method exists";
// } else {
//     echo "Method doesn't exists";
// }


?>