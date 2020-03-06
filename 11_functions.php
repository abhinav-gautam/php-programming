<?php

// Functions
function print_name(){
    echo "Abhinav Gautam";
}
print_name();
echo "<br>";

function calculate(){   
    echo 45 + 65;
}
calculate();
echo "<br>";

// Function with parameters
function sum($num1,$num2){
    echo $num1 + $num2;
}
sum(5,64);
echo "<br>";

// Function with return
function multiply($num1,$num2){
    return $num1*$num2;
}
$result = multiply(5,10);
echo $result;
echo "<br>";

sum(multiply(45,65),multiply(98,32));
?>