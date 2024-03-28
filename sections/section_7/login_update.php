<?php include "db.php";

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
        <div class="col-xs-6">
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="passsword">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>

                <div class="form-group">
                <select name="id" id="">

                    <option value=""></option>
                </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Update">
            </form>                
        </div>
    </div>
</body>
</html>