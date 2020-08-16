<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>PHP 関数基礎</title>
    </head>
    <body>
        <?php
            function getTriangleArea(float $base,float $height):float{
                return $base*$height/2;
            }

            $area=getTriangleArea(8,10);
            print "三角形の面積は{$area}です。";
        ?>
    </body>
</html>