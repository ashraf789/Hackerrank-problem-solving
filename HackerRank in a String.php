<?php
/**
 * @author: syed ashraf ullah
 * date: 29/04/2020
 * problem: https://www.hackerrank.com/challenges/hackerrank-in-a-string/problem
 */
// Complete the hackerrankInString function below.
function hackerrankInString($s) {
    // string to char array
    $s = str_split($s);

    $dictionary = array('h','a','c','k','e','r','r','a','n','k');
   
    $size = sizeof($dictionary);
    $index = array_fill (0,$size,0);

    $i = 0;
    foreach($s as $value){
        if($value == $dictionary[$i]){
            $index[$i] = 1;
            $i++;
        }
    }

    foreach($index as $index => $value ){
        if(!$value) {
            return 'NO';
        }
    }

    return 'YES';
}

/**
 * Sample input #1
 */
// $s = 'hereiamstackerrank';
// $result = hackerrankInString($s);
// echo $result;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = hackerrankInString($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
