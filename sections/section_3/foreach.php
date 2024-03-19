<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // foreach loop only works with arrays
        $arr = [20, 15, 23, 69, 13, 8];
        foreach ($arr as $a) {
            echo $a . "</br>";
        }
    ?>
</body>
</html>