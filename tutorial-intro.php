<?php
/**
 * @author: syed ashraf ullah
 * date: 22/04/2020
 * problem: https://www.hackerrank.com/challenges/tutorial-intro/problem
 */
// Complete the introTutorial function below.
function introTutorial($V, $arr) {
    foreach ($arr as $index => $value) 
    {
        if ($value == $V)
        {
            return $index;
        }
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $V);

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = introTutorial($V, $arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
