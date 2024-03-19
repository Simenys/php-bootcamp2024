<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = [34, 25, 16, 8, 99];
        echo max($arr) . "</br>";
        echo min($arr) . "</br>";

        sort($arr);
        print_r($arr);
    ?>
</body>
</html>