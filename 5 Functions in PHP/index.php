<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP</title>
</head>
<body>
    <h1>Functions in PHP</h1>
    <?php

        echo "<h3>Printing increasing number using function in PHP</h3>";
        function printNumbers($end){
            echo "<br>End point is => ". $end ."<br>";
            if($end<=0){
                echo "Please enter value greater than zero!";
            }
            else{
                for($a=1; $a<=$end; $a++){
                    echo "<br>Value of A is => ". $a;
                }
            }
        }
        printNumbers(5);
        echo "<br>";
        printNumbers(10);
        echo "<br>";
        printNumbers(-20);
    ?>
</body>
</html>