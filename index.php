<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    This is my first php website.<Br>
    <?php
    echo "Hello world.";
    $variable1 =20;
    $variable2 =10;
    echo $variable1;
    echo $variable2;
    echo $variable1 + $variable2;
    //tushar(this is a single line comment)
     ?>
     <?php
     /* debnath(this 
     is a 
     multiline 
     comment)
    */
    echo "Hello world again.";
    echo "<br>";
    //operators in php
    //arithmatic operators
    echo "The value of variable1 + varaiable2 is ";
    echo "<br>";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of variable1 + varaiable2 is ";
    echo "<br>";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of variable1 + varaiable2 is ";
    echo "<br>";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of variable1 + varaiable2 is ";
    echo "<br>";
    echo $variable1 / $variable2;
    echo "<br>";
    //assignment operators
    $newvar = $variable1;
    $newvar += 5;
    echo "<br>";
    echo "This new variable is ";
    echo $newvar;
    //comparison operators
    echo "The value of 1==4 is";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1!=4 is";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1>=4 is";
    echo var_dump(1>=4);
    echo "<br>";
    echo "The value of 1<=4 is";
    echo var_dump(1<=4);
    echo "<br>";
    //INCREAMENT/DECREMENT OPERATORS
     echo $variable1++;
     echo "<br>";
     echo $variable1;
     echo "<br>";
     //echo $variable2--;
     //echo ++$variable1;
     //echo --$variable2;
    //LOGICAL OPERATORS
    $myvar = (true and true);
    echo var_dump($myvar);
    $myvar = (true and false);
    echo var_dump($myvar);
    $myvar = (false xor false);
    echo var_dump($myvar);
     ?>
    </div>
</body>
</html>