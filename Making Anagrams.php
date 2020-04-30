<?php
/**
 * @author: syed ashraf ullah
 * date: 30/04/2020
 * problem: https://www.hackerrank.com/challenges/making-anagrams/problem
 */
// Complete the makingAnagrams function below.
function makingAnagrams($s1, $s2) {
    // Convert to char array
    $s1 = str_split($s1);
    $s2 = str_split($s2);

    // current total size of two array
    $length = sizeof($s1)+sizeof($s2);

    $count = 0;
    foreach ($s1 as $val1) {

        foreach ($s2 as $key => $val2) {
            if ($val1 == $val2) {
                $count +=2;
                unset($s2[$key]);
                break;
            }
        }
    }

    return ($length - $count);
}
/**
 * Sample #1
 */
// $s1 = 'cde';
// $s2 = 'abc';
// $result = makingAnagrams($s1, $s2);

// echo $result;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s1 = '';
fscanf($stdin, "%[^\n]", $s1);

$s2 = '';
fscanf($stdin, "%[^\n]", $s2);

$result = makingAnagrams($s1, $s2);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
