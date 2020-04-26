<?php
/**
 * @author: syed ashraf ullah
 * date: 26/04/2020
 * problem: https://www.hackerrank.com/challenges/countingsort1/problem
 */
// Complete the countingSort function below.
function countingSort($arr) {
    
    // arr[i] should be less then 100 
    // define a 100 size array with initial value is zero 
    $result = array_fill (0,100,0);
    
    // increment the value of the corresponding index no
    foreach ($arr as $value) {
        $result[$value] += 1;
    }

    $sorted = array();
    // convert the sorted index to sorted array
    foreach ($result as $key => $value) {
        while ($value > 0) {
            $sorted[] = $key; 
            $value--;
        }
    }
    return $sorted;
}
/**
 * Smaple input #1
 */
// $arr = array(1,1,3,2,1);

/**
 * Smaple input #2
 */
// $arr = array(63, 54, 17, 78, 43, 70, 32, 97, 16, 94, 74, 18, 60, 61, 35, 83, 13, 56, 75, 52, 70, 12, 24, 37, 17, 0, 16, 64, 34, 81, 82, 24, 69, 2, 30, 61, 83, 37, 97, 16, 70, 53, 0, 61, 12, 17, 97, 67, 33, 30, 49, 70, 11, 40, 67, 94, 84, 60, 35, 58, 19, 81, 16, 14, 68, 46, 42, 81, 75, 87, 13, 84, 33, 34, 14, 96, 7, 59, 17, 98, 79, 47, 71, 75, 8, 27, 73, 66, 64, 12, 29, 35, 80, 78, 80, 6, 5, 24, 49, 82);

// $result = countingSort($arr);
// foreach($result as $value) {
//     echo $value.' ';
// }
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = countingSort($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
