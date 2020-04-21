<?php
/**
 * @author: syed ashraf ullah
 * date: 21/04/2020
 */
// Complete the findDigits function below.
function findDigits($n) {
    
    // Convert degit to char array
    $arr = str_split($n);
    $i = 0;
    $size = sizeof($arr);

    $count = 0;
    while ($i < $size) {

        if ($arr[$i] != 0 && $n % $arr[$i] == 0) {
            $count++;
        }
        $i++;
    }

    return $count;
}

/**
 * Sample #1
 */
// $n = 1012;
// $result = findDigits($n);
// echo $result;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $n);

    $result = findDigits($n);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
