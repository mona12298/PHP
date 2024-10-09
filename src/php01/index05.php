<?php

for ($i = 1; $i <= 5; $i++) {
    echo $i*2 . '<br />';
}

echo "<br />";

$i = 0;
while ($i < 3) {
    echo 'i = ' . $i . '<br />';
    $i += 1;
}

echo "<br />";

$count = 0;
while ($count < 20) {
    $count += 1;
    echo $count . '<br />';
}

//上記策問にて私は最初下のように書いた

$count = 0;
while ($count < 21) {
    echo $count . '<br />';
    $count += 1;
}

//どうして「回数」が２０未満なのに、２１としないのか？
//鉤括弧内の文章？の順番は出力結果に影響するのか。（この場合、出力と増減式で’種類’が違うから関係ないかと考えたがそうじゃないのかも？）
//do..while文と関係があるかも。参照：「しかし、do…while文は繰り返し処理を行ってからその処理を評価するため、少なくとも一回は繰り返し処理が行われます。一見 while 文の処理と似ていますが、do…while 文は少なくとも 1 回は処理をする点 while 文は １ 度も処理をしない場合がある点が異なるため、使用する際は注意が必要です。」

echo "<br />";

$count = 0;
while ($count < 100) {
    if($count % 3 === 0) {
        $count++;
        continue;
    }elseif ($count == 20) {
    break;
    }
    echo $count;
    $count++;
}

//解答例とは少し違うけれど、出力結果は同じだった

echo "<br />";

$nume = 0;
do{
    echo "num = $nume" . '<br />';
    $nume++;
} while ($nume < 3);

echo "<br />";

$count = 0;
for ($count = 0; $count <=50 ; $count++){
    if($count % 3 == 0 && $count % 5 == 0 ){
        echo "FizzBuzz";
    }elseif($count % 5 == 0){
        echo "Buzz";
    }elseif($count % 3 == 0){
        echo "Fizz";
    }else{
        echo "数字";
    }
}
//上記について。for文では（）のなかで定義を行うので、６１行が必要ない。最初のifの条件は、($count % 15 == 0)と書ける。また出力結果の文字列を、解答例では変数のように扱っていた。詳細は教材へ。
