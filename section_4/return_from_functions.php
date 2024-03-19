<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sum($num1, $num2) {
            return $answer = $num1 + $num2;
        }

        $answer = sum(567, 741);
        echo $answer . "</br>";

        $answer = sum(249, $answer);
        echo $answer;


    ?>
</body>
</html>