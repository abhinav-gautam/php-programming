<?php

// Extracting data from forms
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usernames_list = ["Abhinav","Ansh","Jayant"];

    if (strlen($username)<5 ) {
        echo "Username must be greater than 5";
    }
    if (strlen($username)>10) {
        echo "Username cannot be greater than 10";
    }
    if (!in_array($username,$usernames_list)) {
        echo "Not allowed";
    }else {
        echo "Welcome " . $username;
    }   

}
?>
