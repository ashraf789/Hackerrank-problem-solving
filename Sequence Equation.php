<?php

/**
 * @author: syed ashraf ullah
 * date: 20/04/2020
 */
// Complete the permutationEquation function below.
function permutationEquation($p) {
    $size = sizeof($p);
    $i = 0;

    $result = array();
    while(++$i <= $size)
    {
        $f = 0;

        while ($p[$f] != $i){
            $f++;
        }

        $f++;
        $y = 0;
        while ($p[$y] != $f){
            $y++;
        }

        $result[$i-1] = ($y+1);
    }

    return $result;
    
}

/**
 * Sample Input #1
 */
// $p = array(2, 3, 1);

/**
 * Sample Input #2
 */
// $p = array(4, 3, 5, 1, 2);

// $result = permutationEquation($p);
// print_r($result);
// return;
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $p_temp);

$p = array_map('intval', preg_split('/ /', $p_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = permutationEquation($p);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($stdin);
fclose($fptr);
