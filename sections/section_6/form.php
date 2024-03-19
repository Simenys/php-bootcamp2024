<?php
    if (isset($_POST['submit'])) {
        $arr = ["Tomas", "Rokas", "Domas", "Simonas"];
        $username = "";
        $password = "";

        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (strlen($username) < 5) {
                echo "Username is too short. It must be 5 character or longer.";
            }

            // check is username is already created
            if (!in_array($username, $arr)) {
                echo "Sorry, you are not registered.";
            } else {
                echo "Greetings {$username}!";
            }

        }

        //echo $username . " " . $password;      
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- action will redirect me to next page form_external.php -->
        <form action="form_external.php" method="post">
            <input type="text" placeholder="Enter Username" name="username"></br>
            <input type="text" placeholder="Enter Password" name="password"></br>
            <input type="submit" name="submit">
        </form>

</body>
</html>