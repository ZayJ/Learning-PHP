<!--
To change this template, choose Tools | Templates
and open the template in the editor.

Arithmetic-assignment operators perform an arithmetic operation on the variable at the same time as assigning a new value. 
For this PHP exercise, write a script to reproduce the output below. 
Manipulate only one variable using no simple arithmetic operators to produce the values given in the statements.

Hint: In the script each statement ends with "Value is now $variable."

Value is now 8.
Add 2. Value is now 10.
Subtract 4. Value is now 6.
Multiply by 5. Value is now 30.
Divide by 3. Value is now 10.
Increment value by one. Value is now 11.
Decrement value by one. Value is now 10.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $val=8;
        
        echo "Value is now $val</br>";
        
        $val += 2;
        
        echo "Add two. Value is now $val</br>";
        
        $val -= 4;
        
        echo "Subtract 4. Value is now $val.</br>";
        
        $val *= 5;
        
        echo "Mutiply by 5. Value is now $val.</br>";
        
        $val /= 3;
        
        echo "Divide by 3. Value is now $val.</br>";
        
        $val ++;
        
        echo "Increment by one. Value is now $val.</br>";
        
        $val --;
        
        echo "Decrement by one. Value is now $val.</br>";
        
        
        ?>
    </body>
</html>
