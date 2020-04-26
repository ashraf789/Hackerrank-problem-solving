<?php
/**
 * @author: syed ashraf ullah
 * date: 26/04/2020
 * problem: https://www.hackerrank.com/challenges/cut-the-sticks/problem?h_r=profile
 */
// Complete the cutTheSticks function below.
function cutTheSticks($arr)
{
    $countarr = array();    
    while (sizeof($arr) > 0) {
        
        $smallest = smallerStick($arr);
        $count = 0;
        $newarr = array();

        // Cut stics
        foreach ($arr as $key => $value) {
            $remain = $value - $smallest;

            // count cutted stick number
            $count++;
    
            if ($remain > 0) {
                $newarr[] = $value;
            }
        }
        
        $arr = $newarr;
        $countarr[] = $count;
    }

    return $countarr;
}

function smallerStick($arr)
{
    $smaller = $arr[0];
    foreach ($arr as $value) {
        if ($value > 0 && $value < $smaller) {
            $smaller = $value;
        }
    }

    return $smaller;
}

/**
 * Sanple input #1
 */
// $arr = array(5, 4, 4, 2, 2, 8);
/**
 * Sanple input #2
 */
// $arr = array(23, 74, 26, 23, 92, 92, 44, 13, 34, 23, 69, 4, 19, 94, 94, 38, 14, 9, 51, 98, 72, 46, 17, 25, 21, 87, 99, 50, 59, 53, 82, 24, 93, 16, 88, 52, 14, 38, 27, 7, 18, 81, 13, 75, 80, 11, 29, 39, 37, 78, 55, 17, 78, 12, 77, 84, 63, 29, 68, 32, 17, 55, 31, 30, 3 ,17, 99, 6, 45, 81, 75, 31, 50 ,93, 66, 98, 94, 59, 68, 30, 98, 57, 83, 75, 68, 85, 98 ,76 ,91 ,23 ,53 ,42, 72, 77);
// $result = cutTheSticks($arr);
// print_r($result);
// return;
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = cutTheSticks($arr);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($stdin);
fclose($fptr);
