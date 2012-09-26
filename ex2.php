<!--
To change this template, choose Tools | Templates
and open the template in the editor.


For your second PHP exercise, echo the following statement to the browser:

“Twinkle, Twinkle little star.”

Next, create two variables, one for the word “Twinkle” and one for the word “star”. 
Echo the statement to the browser, this time substituting the variables for the relevant words. 
Change the value of each variable to whatever you like, and echo the statement a third time. 
Remember to include code to show your statements on different lines.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        echo "Twinkle, Twinkle little Star! </br> ";
        
        $twinkle = "Twinkle";
        $star ="Star";
        
        echo " $twinkle, $twinkle little $star! </br> ";
        
        ?>
    </body>
</html>
