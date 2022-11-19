<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants in PHP</title>
</head>
<body>
    <h1>Constants in PHP</h1>
    <?php
        define("PI", 3.14);
        echo "<h3>This PI constant value is defined using PHP</h3><br>PI => ";
        echo PI;

        echo "<br>Area of a circle of radius 10 using constant PI is ";
        $ans = 2*PI*10;
        echo $ans;
    ?>

</body>
</html>