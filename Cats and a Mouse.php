<?php
/**
 * @author: syed ashraf ullah
 * date: 30/04/2020
 * problem: https://www.hackerrank.com/challenges/cats-and-a-mouse/problem
 */
// Complete the catAndMouse function below.
function catAndMouse($x, $y, $z) {
    if (abs($x-$z) < abs($y-$z)) return 'Cat A';
    if (abs($x-$z) > abs($y-$z)) return 'Cat B';

    return 'Mouse C';
}
/**
 * Sample #1
 */
// $x = 1; 
// $y = 2; 
// $z = 3;

// $result = catAndMouse($x, $y, $z);
// echo $result;
// return;
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $xyz_temp);
    $xyz = explode(' ', $xyz_temp);

    $x = intval($xyz[0]);

    $y = intval($xyz[1]);

    $z = intval($xyz[2]);

    $result = catAndMouse($x, $y, $z);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
