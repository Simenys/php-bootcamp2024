<?php 
    include "db.php";
    include "functions.php";

    if(isset($_POST['submit'])) {
        delete();
    }
        
?>

<?php include "includes/header.php" ?>

    <!-- form table -->
    <div class="container">
        <div class="col-xs-6">
            <h1 class="text-center">Delete</h1>
            <form action="login_delete.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="passsword">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                </br>
                <div class="form-group">
                <select name="id" id="">
                    <?php 
                        showAllData();
                    ?>  
                </select>
                </div>
                </br>
                <input class="btn btn-primary" type="submit" name="submit" value="Delete">
            </form>                
        </div>
    </div>

<?php include "includes/footer.php" ?>