<?php
/**
 * @author: syed ashraf ullah
 * date: 30/04/2020
 * problem: https://www.hackerrank.com/challenges/game-of-thrones/problem
 * 
 * Note: Palindrome string longer than 1 character are made up of pairs of characters.
 * 
 * if every character total are an 'Even' number then it's a palindrome string
 * if every character total are an 'Even' except only one character total is 'odd' number then it's also a palindrome string
 * otherwise not a palindrome string
 * 
 * Example:
 * aaccbb -> palindrome string
 * aacccbb -> palindrome string
 * aaacccbb -> not a palindrome string
 */

// Complete the gameOfThrones function below.
function gameOfThrones($s) {
    $s = str_split($s);
    
    $arr = array_fill(97,123,0);
    foreach ($s as $value) {
        $arr[ord($value)]++;
    }

    $totalOdd = 0;
    foreach ($arr as $value) {
        if ($value > 0 && $value%2 !=0) {
            $totalOdd++;

            if ($totalOdd > 1) return 'NO';
        }
    }

    return 'YES';
}

// $s = 'cdefghmnopqrstuvw';
// $result = gameOfThrones($s);
// echo $result;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = gameOfThrones($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
