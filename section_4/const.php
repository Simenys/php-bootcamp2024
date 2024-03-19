<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // simple variable
        $var = 10;
        echo $var . "</br>";
        $var = 100;
        echo $var . "</br>";

        // const creation, and you are unable to change it
        define("NAME", "Simonas");
        echo NAME . "</br>";

        // code bellow would throw an erro
        // NAME = "Jurgis";

        // new method to create const var
        const NAME2 = "Jurgis";
        echo NAME2;

    ?>
</body>
</html>