<?php
/**
 * @author: syed ashraf ullah
 * date: 22/04/2020
 * problem: https://www.hackerrank.com/challenges/quicksort1/problem
 */
// Complete the quickSort function below.
function quickSort($arr) {
    $left = array();
    $right = array();
    $p = $arr[0];

    $size = sizeof($arr);
    for ($i=1; $i < $size; $i++) { 
        if ($p < $arr[$i]) {
            $right[] = $arr[$i];
            continue;
        }

        $left[] = $arr[$i];
    }

    // Add the pivot with left array
    $left[] = $p;

    // Merge left and right then return.
    return array_merge($left, $right);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = quickSort($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
