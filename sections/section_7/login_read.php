<?php
    include "db.php";
    include "functions.php";

        
?>

<?php include "includes/header.php" ?>

    <!-- form table -->
    <div class="container">
        <pre style="border: 1px solid black;">
        <?php
        read();
        ?>       
        </pre>
    </div>

<?php include "includes/footer.php"?>