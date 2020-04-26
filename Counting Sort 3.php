<?php
/**
 * @author: syed ashraf ullah
 * date: 26/04/2020
 * problem: https://www.hackerrank.com/challenges/countingsort3/problem
 */

function countingSort($arr) {
    
    // arr[i] should be less then 100 
    // define a 100 size array with initial value is zero 
    $result = array_fill (0,100,0);
    
    // increment the value of the corresponding index no
    foreach ($arr as $value) {
        $result[$value] ++;
    }

    $sorted = array();
    $lastvalue = 0;

    $sorted[0] = $result[0];
    for ($i=1; $i < 100; $i++) { 
        $sorted[$i] = $result[$i]+$sorted[$i-1];
    }
    return $sorted;
}

/**
 * Smaple input #1
 */
// $arr = array(4,3,0,1,5,1,2,4,2,4);
// $result = countingSort($arr);
// foreach($result as $value) {
//     echo $value.' ';
// }
// return;

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, "%d", $n);
for ($i=0; $i < $n; $i++) { 
    fscanf($_fp, "%d", $arr[$i]);
}

$result = countingSort($arr);

$fptr = fopen(getenv("OUTPUT_PATH"), "w");
fwrite($fptr, implode(" ", $result) . "\n");

fclose($_fp);
fclose($fptr);
?>