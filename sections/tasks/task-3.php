<?php
$arr = [];

for($i = 0;$i < 10;$i++){
    $arr[$i] = rand(-5, 5);
}

foreach($arr as $num){
    echo $num . " ";
}
echo "</br>";
foreach($arr as $num){
    echo $num . "</br>";
}
echo "</br>";

print_r($arr);
echo "</br>";
echo "</br>";
$sum = 0;
foreach($arr as $num){
    $sum+=$num;
}
echo"Sum = ". $sum/=count($arr);
echo "</br>";
$mult = 1;
foreach($arr as $num){
    if($num > $sum)
    {
        $mult *=$num;
    }
}
echo "Mult = ". $mult;
