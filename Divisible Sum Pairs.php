<?php
/**
 * @author: syed ashraf ullah
 * date: 26/04/2020
 * problem: https://www.hackerrank.com/challenges/divisible-sum-pairs/problem
 */

// Complete the divisibleSumPairs function below.
function divisibleSumPairs($n, $k, $ar) {

    $count = 0;
    foreach ($ar as $key => $value) {
        for ($i = ($key+1); $i < $n; $i++) { 
            
            $sum = $ar[$i]+$value;

            if ($sum%$k == 0) {
                $count++;
            }
        }
    }
    return $count;
}

/**
 * Sample input #1
 */
// $n = 6;
// $k = 3;
// $ar = array(1, 3, 2, 6, 1, 2);
// $result = divisibleSumPairs($n, $k, $ar);
// echo $result;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = divisibleSumPairs($n, $k, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
