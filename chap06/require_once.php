<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>PHP 関数基礎</title>
    </head>
    <body>
        <?php
            require_once 'include.php';
            $area=getTriangleArea(8,10);
            print "三角形の面積は{$area}です。";
        ?>
    </body>
</html>