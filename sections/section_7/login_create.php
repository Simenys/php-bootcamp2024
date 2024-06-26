<?php
    include "db.php";
    include "functions.php";
?>

<?php include "includes/header.php" ?>

    <!-- form table -->
    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">Create</h1>
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="passsword">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                </br>
                <input class="btn btn-primary" type="submit" name="submit" value="Create">
            </form> 
            <!-- function bellow adds data to the table and prints out successfull message -->
            <h4 class="text-center"><?php if(isset($_POST['submit'])) { create(); } ?></h4>               
        </div>
    </div>

<?php include "includes/footer.php" ?>