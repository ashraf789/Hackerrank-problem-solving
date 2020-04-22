<?php
/**
 * @author: syed ashraf ullah
 * Date: 21/04/2020
 */
// Complete the insertionSort1 function below.
function insertionSort1($n, $arr)
{
    $i = 0;

    while (++$i < $n) {

        $k = $i;
        $val = $arr[$k];

        // Sort from current index
        while (--$k >= 0 && $val < $arr[$k]) {
            $arr[$k+1] = $arr[$k];    
        }

        $arr[$k+1] = $val;

        // Print current array
        foreach ($arr as $value) {
            echo $value.' ';
        }

        // new line CMD
        // echo PHP_EOL;

        // Browser
        echo '</br>';
    }
}

/**
 * Sample input #1
 */
$n = 6;
$arr = array(1, 4, 3, 5, 6, 2);

/**
 * Sample input #2
 */
// $n = 7;
// $arr = array(3, 4, 7, 5, 6, 2, 1);
insertionSort1($n, $arr);
return;

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $arr);

fclose($stdin);
