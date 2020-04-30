<?php
/**
 * @author: syed ashraf ullah
 * date: 30/04/2020
 * problem: https://www.hackerrank.com/challenges/two-strings/problem
 */
// Complete the twoStrings function below.
function twoStrings($s1, $s2) {
    $s1 = str_split($s1);
    $s2 = str_split($s2);

    $arr1 = array_fill(97,123,0);
    $arr2 = array_fill(97,123,0);

    foreach ($s1 as $val) {
        $arr1[ord($val)]++;
    }
    
    foreach ($s2 as $val) {

        if ($arr1[ord($val)] > 0) {
            return 'YES';
        }
    }

    return 'NO';
}

/**
 * Sample #1
 */
// $s1 = 'hello';
// $s2 = 'world';

// $result = twoStrings($s1, $s2);
// echo $result;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s1 = '';
    fscanf($stdin, "%[^\n]", $s1);

    $s2 = '';
    fscanf($stdin, "%[^\n]", $s2);

    $result = twoStrings($s1, $s2);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
