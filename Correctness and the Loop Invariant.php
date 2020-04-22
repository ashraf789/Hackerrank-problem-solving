<?php
/**
 * @author: syed ashraf ullah
 * date: 22/04/2020
 * problem: https://www.hackerrank.com/challenges/correctness-invariant/problem
 */

function insertionSort(&$arr){
   for($i=0;$i<count($arr);$i++){
      $val = $arr[$i];
      $j = $i-1;
      while($j>=0 && $arr[$j] > $val){
         $arr[$j+1] = $arr[$j];
         $j--;
      }
      $arr[$j+1] = $val;
   }
}
/**
 * Sample #1
 */
// $arr = array(7, 4, 3, 5, 6, 2);
// insertionSort($arr);
// foreach($arr as $value) {
//   print $value." ";
// }
// return;
$handle = fopen ("php://stdin","r");
$t = fgets($handle);
$arr = explode(' ', fgets($handle));

insertionSort($arr);
foreach($arr as $value) {
  print $value." ";
}
?>