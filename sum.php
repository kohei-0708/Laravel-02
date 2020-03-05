<?php
function sum($max){
    $result = 0;
    for($i=1; $i<=$max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);

echo "\n";

function lo($tex){
    return  $tex*2;

}
echo lo(4);

echo "\n";

function f($a,$b){
    return $a+$b;
}
echo f(5,9);

echo "\n";

function ko($arr){
    $result = 1;
    foreach($arr as $ar){
        $result*=$ar;
    }
    return $result;
}

echo ko(array(1,3,5,7,9));

echo "\n";

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number<$a){
     $max_number=$a;
 }
 }

 return $max_number;
 }
 echo max_array(array(3,56,78,90,990));
 
 echo "\n";
 
 $text = '<p>Test test.</p><a>ok</a>';
 
 echo strip_tags($text);
 
 echo "\n";
 
 $toke = array("apple","banana");
 array_push($toke,"peach","lemon");
 echo $toke[3];
 
 echo "\n";
 
 $ab=array(1,2,3);
 $cd=array(4,5,6);
 $ef=array(7,8,9);
 $reslut=array_merge($ab,$cd,$ef);
 echo $reslut[6];
 
 echo "\n";
 
$today = time();

echo '現在のタイムスタンプは:'.$today;
echo "\n";

$week = mktime(0,0,0,3,12,2020);
echo '来週2020年3月12日のタイムスタンプは:'.$week;

echo "\n";

echo date('y/m/d',time());

echo "\n";
$weeks = mktime(0,0,0,3,12,2020);
echo date('y/m/d',$weeks);