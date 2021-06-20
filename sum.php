<?php

function sum($kakeru){
    
 $result = $kakeru * 2;
return $result ;
}
echo sum(100);

function add($a, $b){
    $result = $a + $b ;
    return $result ;
}
    echo sum(3);

function times($arr) {
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    return $result;
}
echo times(array(1,3,5,7,9));



 $array = array(10,20,30,40,50);
 
 echo max($array);
 
 $str = "<h1>strip_tags消去</h1>"
 . "<p>HTMLタグ</p>";
 echo strip_tags($str)."\n";
 
 $arr = array("赤","黄");
 array_push($arr,"青");
 print_r($arr);
 
 $array1 = [1,2,3];
 $array2 = [4,5,6];
 $array3 = [7,8,9];
 
 $array = array_merge($array1,$array2,$array3);
 print_r($array);
 
 $time = mktime(3);
 var_dump(date('y年m月d日h時i分s秒',$time));
 print('<br>');
 
 echo date('Y-m-d H:i:s');
 ?>
 