<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h4>Switch statements</h4>" . "</br>";

        $number = 2;

        switch($number) {
            case 5:
                echo "Number is 5";
                break;
            case 3:
                echo "Number is 3";
                break;
            case 2:
                echo "Number is 2";
                break;
            case 4:
                echo "Number is 4";
                break;
            default :
                echo "There is no such number";
        }

    ?>
</body>
</html>