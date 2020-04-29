<?php
/**
 * @author: syed ashraf ullah
 * date: 29/04/2020
 * problem: https://www.hackerrank.com/challenges/funny-string/problem
 */
// Complete the funnyString function below.
function funnyString($s) {
    $s = str_split($s);
<<<<<<< HEAD
=======
    $diff1 = array();
>>>>>>> b0b797c0d5829a7bedc3d4ae2fbd7682183adaff
    $lenth = sizeof($s)-1;

    for ($i=0, $j=$lenth; $i < $lenth; $i++,$j--) { 
        $dif1 = ord($s[$i]) - ord($s[$i+1]);
        $dif2 = ord($s[$j]) - ord($s[$j-1]);
        
        if (abs($dif1) != abs($dif2)){
            return 'Not Funny';
        }
    }

    return 'Funny';
}
/**
 * Sample 1
 */
// $s = 'acxz';
// $result = funnyString($s);
// echo $result;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = funnyString($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
