<?php
$a = 5;
if($a === 5){
    echo "\$aは５です";
}

echo"<br />";

$a = 7;
if($a !== 5){
    echo "\$aは５以外です";
}

echo"<br />";

if($a === 5){
    echo "\$aは５です";
}elseif ($a === 7){
    echo "\$aは7です";
}else{
    echo "\$aは５と７以外です";
}

echo"<br />";

$people = "Saburo";
switch ($people) {
    case 'Saburo':
    echo "三郎です";
    break;
    case 'Jiro':
    echo "二郎です";
    break;
    case 'Taro':
    echo "太郎です";
    break;
}

echo "<br />";

$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;

