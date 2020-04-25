<?php

/**
 * @author: syed ashraf ullah
 * date: 24/04/2020
 * problem: https://www.hackerrank.com/challenges/quicksort2/problem
 * 
 * Note: My program is working fine but it not accepted by online judge.
 *  I have printed the $ar array and i saw the array is empty. I think i could be the problem from online judge.
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

$ar = array(5, 8, 1, 3, 7, 9, 2);
$ar = quickSort($ar);
return;


$fp = fopen("php://stdin", "r");

fscanf($fp, "%d", $m);

$ar = array();
for ($i=0; $i<$m; $i++) {
    fscanf($fp, "%d", $ar[$i]);
}

quickSort($ar);

?>