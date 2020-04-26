<?php
/**
 * @author: syed ashraf ullah
 * date: 26/04/2020
 * problem: https://www.hackerrank.com/challenges/pangrams/problem
 */
// Complete the pangrams function below.
function pangrams($s) {
    // Convert to lowercase
    $s = strtolower($s);

    // Delete all spaces from string
    $s = str_replace(' ','',$s);
    
    // Convert string to char array
    $input = str_split($s);

    // Define a 97-123 size array with initial value is zero
    $az = array_fill(97,123,0);

    // If a character found increment the corresponding index no
    foreach ($input as $c) {
        $az[ord($c)]++;
    }

    // If any index from 97-123 value is zero then it is not a pangram
    for ($i=97; $i < 123; $i++) { 
        if ($az[$i] == 0) {
            return 'not pangram';
        }
    }    
    return 'pangram';
}
/**
 * Sample input 1
 */
// $s = 'We promptly judged antique ivory buckles for the next prize';
// $result = pangrams($s);
// echo $result;
// return;
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = pangrams($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
