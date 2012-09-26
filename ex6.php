<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
        <body>
            <h2>PHP Variable Data  Types</h2> 
                <p>
                    <?php
                        $whatsit = 'George';
                        echo "Value is " .gettype($whatsit).".</br>";
                        $whatsit = 1.1;
                        echo "Value is " .gettype($whatsit).".</br>";
                        $whatsit = true;
                        echo "Value is " .gettype($whatsit).".</br>";
                        $whatsit = 1;
                        echo "Value is " .gettype($whatsit).".</br>";
                        $whatsit = NULL;
                        echo "Value is " .gettype($whatsit).".</br>";
                    ?>
                </p>
        </body>
</html>
