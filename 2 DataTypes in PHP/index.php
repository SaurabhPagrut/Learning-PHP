<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatype in PHP</title>
</head>
<body>
    <h1>Datatypes in PHP</h1>
    <h3>1. String</h3>
    <?php
    echo $A = "Hello"; echo " is a => ";
    echo var_dump($A);
    ?>
    <h3>2. Integer</h3>
    <?php
    echo $B = 10; echo " is an => ";
    echo var_dump($B);
    ?>
    <h3>3. Float/Double</h3>
    <?php
    echo $C = 10.123; echo " is a => ";
    echo var_dump($C);
    ?>
    <h3>4. Boolean</h3>
    <?php
    echo $D = true; echo " is a => ";
    echo var_dump($D);
    ?>
    <h3>5. Array</h3>
    <?php
    $E = array(10, 20.12, true, 'hey');
    echo "array(10, 20.12, true, 'hey') is an => " ;
    var_dump($E);
    echo "<br>";
    $F = array(10, 20, 30, 40);
    echo "array(10, 20, 30, 40) is an => " ;
    var_dump($F);
    
    ?>
    <h3>6. Object</h3>
    <?php

    class Car{
        public $model;
        public $color;

        public function __construct($model, $color){
            $this->model = $model;
            $this->color = $color;
        }

        public function getMessage(){
            return "This car has model " . $this->model . " and has color " . $this->color . ".";
        }
    }

    echo "This car1 object is created using Car class => ";
    $car1 = new Car("BMW", "Black");
    echo $car1 -> getMessage();
    echo "<br>";

    echo "This car2 object is created using Car class => ";
    $car2 = new Car("TATA", "White");
    echo $car2 -> getMessage();
    echo "<br>";
    ?>

    <h3>7. Null</h3>
    <?php
    $J = "Hello php!";
    echo "J => ";
    echo $J; echo "<br>";

    $J = null;
    echo "After apply null J => ";
    echo $J; echo "<br>";
    ?>
</body>
</html>