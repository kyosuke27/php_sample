<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>PHP 関数基礎</title>
    </head>
    <body>
        <?php

        function checkStatic(){
            static $x=0;
            return ++$x;  
        }
        
        print checkStatic()."<br>";

        print checkStatic();
        print $x; //null
        ?>
    </body>
</html>