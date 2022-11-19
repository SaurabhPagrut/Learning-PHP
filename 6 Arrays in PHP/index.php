<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>
    <h1>Arrays in PHP</h1>
    <h3>Declare an Array in PHP using array() method</h3>
    <?php
        $animals = array('Dog', 'Cat', 'Cow', 'Tiger', 'Buffalo');
        echo "$ animals = array('Dog', 'Cat', 'Cow', 'Tiger', 'Buffalo')";
    ?>
    <h3>Iterating over an array using foreach() loop</h3>
    <?php 
        foreach ($animals as $value) {
            echo $value. "<br>";
        }
    ?>
    <h3>Iterating over an array using for() loop in reverse order</h3>
    <?php 
        for ($a=count($animals)-1; $a>=0; $a--) {
            echo $animals[$a] . "<br>";
        }
    ?>
    <h3>Size of an array using count() method</h3>
    <?php 
        echo "Count = ". count($animals)."<br>";
    ?>
    
</body>
</html>