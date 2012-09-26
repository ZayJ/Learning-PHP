<!--
To change this template, choose Tools | Templates
and open the template in the editor.

PHP includes all the standard arithmetic operators. 
For this PHP exercise, you will use them along with variables to print equations to the browser. 
In your script, create the following variables:
$x=10;
$y=7;

Write code to print out the following:

10 + 7 = 17
10 - 7 = 3
10 * 7 = 70
10 / 7 = 1.4285714285714
10 % 7 = 3

Use numbers only in the above variable assignments, not in the echo statements. You will need a third variable as well.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

            $x=10;
            $y=7;
            $sum;
            $difference;
            $product;
            $quotient;
            $remainder;

            $sum=$x+$y;
            $difference=$x-$y;
            $product=$x*$y;
            $quotient=$x/$y;
            $remainder=$x%$y;

            echo "$x + $y = $sum</br>";
            echo "$x - $y = $difference</br>";
            echo "$x * $y = $product</br>";
            echo "$x / $y = $quotient</br>";
            echo "$x % $y = $remainder</br>";
        
        ?>
    </body>
</html>
