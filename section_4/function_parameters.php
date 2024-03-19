<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sum($a, $b) {
            echo $a + $b . "</br>";
        }

        sum(247, 89);

        // second function
        function greeting($name) {
            echo "Hello {$name}, how are you doing?";
        }

        greeting("Simonas");
    ?>
</body>
</html>