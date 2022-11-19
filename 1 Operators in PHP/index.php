<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in PHP</title>
</head>
<body>
    <h2>This is my first PHP program!</h2>
    <?php
    echo "This is PHP written statement";
    echo "<br>";
    echo "<br>";

    ?>
    <h1>Let's see operators in PHP.</h1>
    <?php
    echo "<h3>Arithmetic Operators</h3>";
    $varA = 5;
    $varB = 10;
    echo "A = ";
    echo $varA;
    echo " B = ";
    echo $varB;
    echo "<br>";
    echo "<br>";
    echo "Addition = ";
    echo $varA+$varB;
    echo "<br>";
    echo "Substraction = ";
    echo $varA-$varB;
    echo "<br>";
    echo "Multiplication = ";
    echo $varA*$varB;
    echo "<br>";
    echo "Division(B/A) = ";
    echo $varB/$varA;
    echo "<br>";
    echo "<br>";

    echo "<h3>Assignment Operators</h3>";
    echo "C = A => C = ";
    echo $varC = $varA;
    echo "<br>";
    echo "C += 10 => C = ";
    echo $varC+=10;
    echo "<br>";
    echo "C -= 10 => C = ";
    echo $varC-=10;
    echo "<br>";
    echo "C *= 10 => C = ";
    echo $varC*=10;
    echo "<br>";
    echo "C /= 10 => C = ";
    echo $varC/=10;
    echo "<br>";    
    echo "<br>";
    
    echo "<h3>Comparision Operators</h3>";
    echo "A = "; echo $varA; echo ", B = "; echo $varB;
    echo "<br>";
    echo "A == B => ";
    echo var_dump($varA==$varB);
    echo "<br>";
    echo "A != B => ";
    echo var_dump($varA!=$varB);
    echo "<br>";
    echo "A > B => ";
    echo var_dump($varA>$varB);
    echo "<br>";
    echo "A < B => ";
    echo var_dump($varA<$varB);
    echo "<br>";
    echo "A >= B => ";
    echo var_dump($varA>=$varB);
    echo "<br>";
    echo "A <= B => ";
    echo var_dump($varA<=$varB);
    echo "<br>";
    echo "<br>";
    
    echo "<h3>Increment/Decrement Operators</h3>";
    echo $varC;
    echo " => C++ => C = ";
    echo $varC++;
    echo "<br>";
    echo $varC;
    echo " => C-- => C = ";
    echo $varC--;
    echo "<br>";
    echo $varC;
    echo " => ++C => C = ";
    echo ++$varC;
    echo "<br>";
    echo $varC;
    echo " => --C => C = ";
    echo --$varC;
    echo "<br>";
    echo "<br>";
    
    echo "<h3>Logical Operators</h3>";
    echo "true and true => ";
    echo var_dump(true and true);
    echo "<br>"; 
    echo "false && false => ";
    echo var_dump(false && false);
    echo "<br>"; 
    echo "true or false => ";
    echo var_dump(true or false);
    echo "<br>"; 
    echo "false || false => ";
    echo var_dump(false || false);
    echo "<br>"; 
    echo "true xor false => ";
    echo var_dump(true xor false);
    echo "<br>"; 
    echo "<br>"; 
    ?>
</body>
</html>