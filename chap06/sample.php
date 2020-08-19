
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>PHP 関数基礎</title>
    </head>
    <body>
        <?php
        //最大値最小値を返す自作関数
        print "最大値最小値を返す自作関数<br>";
        function max_min(float ...$area): array{
        //最大値最小値の順で配列を生成
            return [max($area),min($area)];//最大値最小値を配列で返す
        }
        $result=max_min(10,2,-5,3,78);
        print_r($result);
        list($max,$min)=max_min(10,2,-5,3,78);//配列の中身を変数に振り分ける
        print "最大値 : {$max}、最小値 : {$min}<br>";

        //再帰関数階乗計算
        print "<br>再帰関数計算<br>";
        function factorial(int $num): int{
            if($num!==0){return $num*factorial($num-1);}
            return 1;//終了ポイント
        }

        print factorial(5);

        //可変関数
        print "<br>可変関数";
        function getTriangleArea(float $base,float $height):float{
            return $base*$height/2;
        }

        $name='getTriangleArea';//呼びたい関数の名前を代入
        $area=$name(8,10);//呼びたい関数の名前で呼び出す
        print "<br>三角形の面積は{$area}です。";


        //高階関数
        print "<br><br>高階関数";
        function my_array_walk(array $array,callable $func){
            //配列$arrayの内容を順に処理
            foreach($array as $key=>$value){
                $func($value,$key);//funcで指定された関数を呼び出し
            }
        }

        //配列を表示するためのユーザー定義関数
        function showItem($value,$key){
            print "<br>{$key} : {$value}";
        }

        $result=0;

        function sum(float $value,int $key){
            global $result;
            $result+=$value;
        }

        $data1=['杉田','永田','杉沼','和田','土井'];
        $data2=[100,50,10,5];
        my_array_walk($data1,'showItem');//呼び出すときに名前を変えるだけで処理が変えられる
        my_array_walk($data2,'sum');
        print "<br>合計値 : {$result}";

        //無名関数（クロージャ）->名前を付けなくてもよい関数(無名) 
        print "<br><br>無名関数";
        my_array_walk($data1,
            function($value,$key){//第二引数に直接関数を書く
                print "<br>{$key} : {$value}";
            }
        );
        
        print "<br><br>use命令";
        $data=[100,50,10,5];
        $result=0;

        my_array_walk($data,function(float $value,int $key)use(&$result){
            $result+=$value;
        });

        print "<br>合計値 : {$result}";

        //ジェネレータ
        print "<br><br>ジェネレータ<br>";
        function myGen(){
            yield 'あいうえお';
            yield 'かきくけこ';
            yield 'さしすせそ';
        }

        foreach(myGen() as $value){
            print $value.'<br>';
        }

        function getPrimes(){
            $num=2;//素数の開始値
            //2から順に素数判定し、素数の場合にだけyield(無限ループ)
            while(true){
                if(isPrime($num)){yield $num;}
                $num++;
            }
        }
        function isPrime(int $value):bool{
            $prime=true;//素数かどうか判定するフラグ
            //2~sqrt($value)で、$valueを割り切れるもの(余りが0)があるか
            for($i=2;$i<=floor(sqrt($value));$i++){
                if($value%$i===0){
                    $prime=false;//割り切れるものがあれば素数ではない
                    break;
                }
            }
            return $prime;
        }
        print "素数表示<br>";
        foreach(getPrimes() as $prime){
            //素数が101以上になったら終了
            if($prime>100){die();}
            print $prime.',';
        }
        ?>


    </body>
</html>