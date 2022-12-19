<?php

function sum($max) {
    $result = 0;
    
    for($i = 1; $i <= $max; $i++ ) {
        $result += $i;
    }
    
    return $result;
}

echo sum(100);

/*function 関数名(仮引数) {
    実行する処理
} */

$string = "abcdef";
echo strlen($string);

$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;

$array = array(2,5,9,7,3,1,8,6,4);
asort($array); #asortは昇順,arsortは降順
print_r($array);

#課題1　引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($num) {
   
   echo $num *= 2;
   
}

echo double(6);

#課題2 .$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

function plus($a, $b) {
   
   echo $a + $b; 
   
}

echo plus(3, 7);

#課題3 $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function multiple($arr) {
    $sum = 1;
    
  foreach ( $arr as $arrvalue ) {
      $sum *= $arrvalue;
  }
  echo $sum;  
}
multiple(array(1,3,5,7,9));

#課題4 下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if ($max_number < $a){
         $max_number = $a;
     }
 }

 return $max_number;
 }
 
# echo max_array(array(1,3,4,7));

#課題5. strip_tags,array_push,array_merge,time, mktime,date の使い方

#strip_tags
#strip_tags("文字列[, 取り除かないタグ]") → 戻り値:タグ削除後の文字列
#セキュリティ対策のために文字列を加工

$html_code = "<html><body><title>これは</title><p>テスト</p></body></html>";
$result = strip_tags($html_code, "<p>");
echo $result;

#array_push
#配列の最後に一つ以上の要素を追加したいときに使用
#array_push(追加先の配列,追加する値、、、)

$alphabet = array("a", "b" ,"c");
array_push($alphabet , "d", "e");
print_r($alphabet);

#array_merge
#配列を結合する
#array array_merge (array $配列 [, 追加する配列])

$alphabet2 = ["f", "g"];
$alphabet3 = array_merge($alphabet , $alphabet2);
print_r($alphabet3);

#time 現在のUNIXのタイムスタンプを返す,1970年1月1日からの通算秒として返す
echo time();

#mktime int mktime([int hour [, int minute [, int second[,int month [,int day [,int year]]]]]])
echo  mktime(0,0,0,12,19,2022);

#date (フォーマット, タイムスタンプ)
$timestamp = time();
echo date("Y/m/d", $timestamp);


