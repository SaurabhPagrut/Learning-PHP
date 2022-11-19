<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>
    <h1>Loops in PHP</h1>
    <?php

        // Basic For Loop.
        echo "Basic for loop.<br>";
        $end = 5;
        for($i=1; $i<=$end; $i++){
            echo "The value of i is : ". $i ."<br>";
        }
        echo "<br>";
        
        // While loop.
        echo "While loop.<br>";
        $start = 1;
        while ($start <= $end) {
            echo "The value of i is : ". $start ."<br>";
            $start++;
        }
        echo "<br>";
        
        // Do While loop.
        echo "do while loop.<br>";
        $start = 1;
        do {
            echo "The value of i is : ". $start++ ."<br>";
        } while ($start <= $end);
        echo "<br>";

        // foreach loop.
        echo "Iterating over array ('php', 'python', 'java', 'js') using foreach loop.<br>";
        $arr = array('php', 'python', 'java', 'js');
        foreach ($arr as $value) {
            echo "The language is : " . $value ."<br>";
        }
        echo "<br>";
    ?>
</body>
</html>