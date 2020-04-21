<?php
/**
 * @author: syed ashraf ullah
 * Date: 21/04/2020
 */
// Complete the insertionSort1 function below.
function insertionSort1($n, $arr)
{
    while (--$n > 0) {
        
        $copy = -1;

        // Lower index is greter value, need to swap
        if ($arr[$n] < $arr[$n-1]) {

            $copy = $arr[$n];
            $arr[$n] = $arr[$n-1];

            // Print aurrent array
            foreach ($arr as $value) {
                echo $value.' ';
            }

            $arr[$n-1] = $copy;

            // new line
            echo PHP_EOL;
        }
    }

    // Final sorted array
    foreach ($arr as $value) {
        echo $value.' ';
    }
}

/**
 * Sample input #1
 */
// $n = 5;
// $arr = array(2, 4, 6, 8, 3);
// insertionSort1($n, $arr);
// return;

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $arr);

fclose($stdin);
