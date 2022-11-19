<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in PHP</title>
</head>
<body>
    <h1>Strings in PHP</h1>
    <h3>Declaring a string using $ sign</h3>
    <?php
        $str = "Saurabh Pagrut";
        echo $str;

        echo "<h3>Concatinating string using dot(.) character</h3>";
        echo "My name is " .$str;

        echo "<h3>Printing length of a string using strlen()</h3>";
        echo "length of " .$str . " is : " . strlen($str);

        echo "<h3>Printing words of a string using str_word_count()</h3>";
        echo "Total words of " .$str . " are : " . str_word_count($str);
        
        echo "<h3>Reverse of a string using strrev()</h3>";
        echo "The reverse of a " .$str . " is : " . strrev($str);
        
        echo "<h3>Position of a starting index of substring using strpos()</h3>";
        echo "The starting index of a 'rabh' is : " . strpos($str, 'rabh');
        
        echo "<h3>Replacing a substring of a string using str_replace()</h3>";
        echo "The Replaced String of a " .$str . " is : " . str_replace("Saurabh", "Shubham", $str);
        


    ?>
</body>
</html>