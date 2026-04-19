<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> This is my first webpage </h1>
    <h2> Class Task </h2>
<?php

echo "Task 1 <br><br>";
    $length =10;
    $width =5;

    $area = $length * $width;
    $perimeter = 2 * ($length + $width);

    echo "Area: " . $area . "<br>";
    echo "Perimeter: " . $perimeter . "<br><br>";

    echo "Task 2 <br><br>";

    $amt=1000;
    $vat = $amt * 0.15; 
    $total = $amt + $vat; 

    echo "Amount: " . $amt . "<br>";
    echo "VAT: " . $vat . "<br>";
    echo "Total Amount : " . $total . "<br><br>";

    echo "Task 3 <br><br>";

    $n =8;

    if ($n % 2 == 0) 
    {
        echo $n . " is Even<br><br>";
    } else 
    {
        echo $n. " is Odd <br><br>";
    }

    echo "Task 4 <br><br>";

    $a = 30;
    $b = 25;
    $c = 10;

    if ($a >= $b && $a >=$c) 
    {
        echo "Largest number is: " . $a . "<br><br>";
    } else if ($b >= $a && $b >=$c)
    {
        echo "Largest number is: " . $b . "<br><br>";
    } else
    {
        echo "Largest number is: " . $c . "<br><br>";
    }

    echo "Task 5 <br><br>";

    for ($i = 10; $i <= 100; $i++) 
    {
        if ($i % 2 != 0) 
        {
            echo $i . " ";
        }
    } echo "<br><br>";

    echo "Task 6 <br><br>";

    $n = array(10, 25, 30, 45, 90);
    $search = 90;
    $found = false;

    for ($i = 0; $i<5; $i++) 
    {
        if ($n[$i] == $search) 
        {
            $found = true;
            break;
        }
    }

    if ($found == true) 
    {
        echo $search . " is found. <br><br>";
    } else 
    {
        echo $search . " is not found. <br><br>";
    }

    echo "Task 7 <br><br>";

    for ($i = 1; $i <= 3; $i++) 
    {
       for ($j = 1; $j <= $i; $j++) 
       {
          echo "* ";
       }
    echo "<br>";
    } echo "<br>";

    for ($i = 3; $i >= 1; $i--) 
    {
       for ($j = 1; $j <= $i; $j++) 
       {
         echo $j . " ";
       }
    echo "<br>";
    } echo "<br>";

    $char = 'A';

    for ($i = 1; $i <= 3; $i++) 
    {
       for ($j = 1; $j <= $i; $j++) 
       {
          echo $char . " ";
          $char++;
       }
    echo "<br>";
    }
?>
</body>
</html>