<?php


        $conn = mysqli_connect('localhost', 'root', '', 'loginapp_learn'); 
        if(!$conn) {
            die("Not connected to MYSQL");
        } 

        $query = "SELECT * FROM users";

        $result = mysqli_query($conn, $query);
        if(!$result)  {
            die('Error in query');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- form table -->
    <div class="container">
        <?php
            while($row = mysqli_fetch_assoc($result)) {
        ?>
            <pre>
        <?php 
            print_r($row);
        ?>
            </pre>
        <?php                
            }
        ?>
    </div>
</body>
</html>