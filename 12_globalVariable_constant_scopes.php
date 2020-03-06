<?php

// Global Variable
$x = "outside"; //Global Scope
$y = "outside";

function convert_x(){
    $x = "inside"; // Local Scope
}
function convert_y(){
    global $y;  // Making y global
    $y = "inside";
}

echo $x . "<br>";
convert_x();
echo $x . "<br>";

echo $y . "<br>";
convert_y();
echo $y . "<br>";

// Constants
define("NAME","Abhinav");
echo NAME;

?>