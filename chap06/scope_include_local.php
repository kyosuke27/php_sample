<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>PHP 関数基礎</title>
    </head>
    <body>
        <?php
            function checkScope():string{
                require_once 'scope_included_global.php';
                return $scope;
            }

            print checkScope();
            print $scope; //表示されない
        ?>
    </body>
</html>