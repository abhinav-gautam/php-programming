<?php include '21_car_class.php';

echo 'BMW Car:<br>';

$bmw = new Car;

echo "Doors:".$bmw->doors."<br>";
echo "Supercharger:".$bmw->supercharger."<br>";
echo "Speed:".$bmw->speed."<br>";

$bmw -> MoveWheels();

echo "<br>";
echo "Speed:".$bmw->speed."<br>";
echo "<br>";

echo "Jet Plane:<br>";

$jet = new Plane;

echo "Doors:".$jet->doors."<br>";
echo "Supercharger:".$jet->supercharger."<br>";
echo "Speed:".$jet->speed."<br>";

$jet -> FlyPlane();

echo "<br>";
echo "Speed:".$jet->speed."<br>";
echo "<br>";

echo "Car:<br>";
echo "Car Wheels:".Car::$wheels."<br>";

Car::IncWheels();

echo "<br>";
echo "Car Wheels:".Car::$wheels;
?>