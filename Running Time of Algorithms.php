<?php
/**
 * @author: syed ashraf ullah
 * date: 22/04/2020
 * problem: https://www.hackerrank.com/challenges/runningtime/problem
 */
// Complete the runningTime function below.
function runningTime($arr) {
    $runtimee = 0;
    for($i=0;$i<count($arr);$i++){
        $val = $arr[$i];
        $j = $i-1;
        while($j>=0 && $arr[$j] > $val){
           $arr[$j+1] = $arr[$j];
           $j--;
           $runtimee++;
        }
        $arr[$j+1] = $val;
     }
    
     return $runtimee;
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = runningTime($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
