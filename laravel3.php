<?php
echo 'hello php!';

$name = "koichi";
 if($name = "koichi") {
     echo "「私は　あなたの名前　です」";
 }else{
       echo "「あなたの名前ではありません」";
       
}
$total = 0;
for($i = 0; $i <= 10000; $i++){
$total += $i;
}
echo $total;

$fruits =array ("apple","orange","banana","pair","peach");
 
foreach($fruits as $fruits) {
  echo  "" . $fruits;
  echo "\n";
  
}

$start = 1;

$end = 101;
  
  for($i = $start; $i <= $end; $i++){
    if($i % 5 ==0)
    echo $i;
  }  
