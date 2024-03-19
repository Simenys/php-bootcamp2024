<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = "outside";

        function convert() {
            global $x;
            $x = "inside";
        }

        // call global scope
        echo $x . "</br>";

        // call function
        convert();
        echo $x;

    ?>
</body>
</html>