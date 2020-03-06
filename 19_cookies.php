<?php
    $name = "CookieName";
    $value = 20;
    $expiration = time() + (60*60*24*7);

    setcookie($name,$value,$expiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h2>Cookie Set:</h2>
    <?php
        if (isset($_COOKIE['CookieName'])) {
            $cookieValue = $_COOKIE['CookieName'];
            echo $cookieValue;
        }
    ?>
</body>
</html>