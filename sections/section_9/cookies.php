<?php

    $name = "UsersName";
    $value = 100;
    $expiration = time() + (60*60*24*365); // time is in seconds
    setcookie($name, $value, $expiration);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- read cookie -->
    <!-- But wht we print value 100 to browser when UsersName assigned to variable $someOne? -->
    <?php 
        if(isset($_COOKIE["UsersName"])) {
            $someOne = $_COOKIE["UsersName"];
            echo $someOne;
        } else {
            $someOne = "";
        }
    ?>
    
</body>
</html>