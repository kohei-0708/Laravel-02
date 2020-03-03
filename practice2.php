<?php
$name = "安田晃平";

if ($name=="安田晃平") {
echo "私は安田晃平です";
}else{
echo "あなたは安田晃平ではありません";
}
echo "\n";
$total = 0;


for($i =1; $i<= 10000; $i++){
    $total += $i;
}
echo $total;

echo "\n";
$fruits = array("apple","orange","lemon","grapes","peach");

foreach($fruits as $fruit ){
    echo "好きなフルーツは".$fruit;
    echo "\n";
}

$start = 1;
$end =100;

for($i=$start;$i<=$end;$i++){
    if($i%5 ==0){
        echo $i;
        echo "\n";
    }
}