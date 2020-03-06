<?php

//Comparison and Logical Operators

if (4 === "4") {
    echo "true";
}elseif (4=="4") {
    echo 'second true';
}

echo '<br>';

if (5>2 && 5<2) {
    echo "true";
}elseif (5>2 || 5<2) {
    echo "second true";
}
?>