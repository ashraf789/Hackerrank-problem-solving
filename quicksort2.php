<?php

/**
 * @author: syed ashraf ullah
 * date: 24/04/2020
 * problem: https://www.hackerrank.com/challenges/quicksort2/problem
 * 
 * Note: The original file reader code is incorrect. It took lot's of time find out the problem.
 *  
 * $ar = array();
 *  for ($i=0; $i<$m; $i++) {
 *   fscanf($fp, "%d", $ar[$i]);
 *  }
 */
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

    foreach ($left as $value) {
        echo $value.' ';
    } 
    echo '<br>';
    //web break
    // echo PHP_EOL;
    return $left;
}

/**
 * Sample input #1
 */
// $ar = array(5, 8, 1, 3, 7, 9, 2);
// $ar = quickSort($ar);
// return;


$fp = fopen("php://stdin", "r");

fscanf($fp, "%d", $m);

// Note: This provided reading method is incorrect.

// $ar = array();
// for ($i=0; $i<$m; $i++) {
//     fscanf($fp, "%d", $ar[$i]);
// }

$input = trim(fgets($fp));
$ar = explode(" ", $input);      
foreach($ar as &$number){
    $number = (int)$number;
}

quickSort($ar);

?>