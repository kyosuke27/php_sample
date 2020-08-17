<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>PHP 関数基礎</title>
    </head>
    <body>
        <?php
            $x=10;

            function checkScope():int{
                return ++$x;
            }

            print checkScope();
            print "<br>";
            print $x;
        ?>
    </body>
</html>