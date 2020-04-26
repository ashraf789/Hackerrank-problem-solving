<?php
/**
 * @author: syed ashraf ullah
 * date: 26/04/2020
 * problem: https://www.hackerrank.com/challenges/mark-and-toys/problem
 */
// Complete the maximumToys function below.
function maximumToys($prices, $k) {
    sort($prices);
    $count = 0;
    foreach ($prices as $value) {
        $k -= $value;
        if ($k < 0) {
            break;
        }
        $count++;
    }
    return $count;
}
/**
 * Sample #1
 */
// $k = 50;
// $price = array(1, 12, 5, 111, 200, 1000, 10);
// $result = maximumToys($price, $k);
// echo $result;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $prices_temp);

$prices = array_map('intval', preg_split('/ /', $prices_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = maximumToys($prices, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
