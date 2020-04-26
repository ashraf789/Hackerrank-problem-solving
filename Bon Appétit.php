<?php
/**
 * @author: syed ashraf ullah
 * date: 26/04/2020
 * problem: https://www.hackerrank.com/challenges/bon-appetit/problem
 */

// Complete the bonAppetit function below.
function bonAppetit($bill, $k, $b) {
    $total = 0;
    foreach ($bill as $key => $value) {
        if ($key == $k) continue;
        $total += $value;
    }
    if (($total/2) == $b) {
        echo 'Bon Appetit';
    } else {
        echo $b - ($total/2);
    }
    return;
}

$nk = explode(' ', rtrim(fgets(STDIN)));

$n = intval($nk[0]);

$k = intval($nk[1]);

$bill_temp = rtrim(fgets(STDIN));

$bill = array_map('intval', preg_split('/ /', $bill_temp, -1, PREG_SPLIT_NO_EMPTY));

$b = intval(trim(fgets(STDIN)));

bonAppetit($bill, $k, $b);
