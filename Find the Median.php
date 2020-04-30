<?php
/**
 * @author: syed ashraf ullah
 * date: 30/04/2020
 * problem: https://www.hackerrank.com/challenges/find-the-median/problem
 */
// Complete the findMedian function below.
function findMedian($arr) {
    $arr = quickSort($arr);

    $size = sizeof($arr);
    return $arr[$size/2];
}

function quickSort($ar) {
    
    if (sizeof($ar) <= 1 ){
        return $ar;
    }

    $left = array();
    $right = array();
    $p = $ar[0];

    $size = sizeof($ar);
    for ($i=1; $i < $size; $i++) { 
        if ($p < $ar[$i]) {
            $right[] = $ar[$i];
            continue;
        }

        $left[] = $ar[$i];
    }
    
    return merge(quickSort($left),quickSort($right), $p);
}

function merge($left, $right, $p) {
    $left[] = $p;
    foreach ($right as $value) {
        $left[] = $value;
    }
    return $left;
}

/**
 * Sample #1
 */
// $arr = array(0, 1, 2, 4, 6, 5, 3);

// $result = findMedian($arr);
// echo $result;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = findMedian($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
