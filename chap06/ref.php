<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>PHP 関数基礎</title>
    </head>
    <body>
        <?php
            function increment(int &$num): int{
                $num++;
                return $num;
            }
            $value=10;
            print increment($value);
            print "<br>";
            print $value;
        ?>
    </body>
</html>