<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function say_Something() {
            echo "Hello, this is a test.";
            echo "</br>";
            calculate();
        }

        function calculate() {
            echo 359 + 612;
        }
        // call function
        say_Something();
    ?>
</body>
</html>