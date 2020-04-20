<?php

/*
 * Complete the 'taumBday' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER b
 *  2. INTEGER w
 *  3. INTEGER bc
 *  4. INTEGER wc
 *  5. INTEGER z
 */

/**
 * @author: syed ashraf ullah
 * date: 20/04/2020
 */
function taumBday($b, $w, $bc, $wc, $z) {
    
    // When conversion cost is too much. We will not convert :p
    if (abs($bc - $wc) <= $z){
        return ($b*$bc + $w*$wc);
    }

    // Black gift is too costly
    // Buy white gift then give some conversion cost.
    if ($bc > $wc) {
        $tb = ($wc*$b) + ($b*$z);
        $tw =  $wc*$w;

        return $tb + $tw;
    }

    // Well all condition already passed, Finally Black gift is more cheaper 
    // So why not to convert from black gift to white?

    $tb = $bc*$b;
    $tw =  ($bc*$w) + ($w*$z);

    return $tb + $tw;
}

/**
 * sample input #1
 */
// $b = 10;
// $w = 10;
// $bc = 1;
// $wc = 1;
// $z = 1;


/**
 * sample input #2
 */
// $b = 3;
// $w = 6;
// $bc = 9;
// $wc = 1;
// $z = 1;

// $price = taumBday($b,$w,$bc,$wc,$z);
// echo $price;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $b = intval($first_multiple_input[0]);

    $w = intval($first_multiple_input[1]);

    $second_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $bc = intval($second_multiple_input[0]);

    $wc = intval($second_multiple_input[1]);

    $z = intval($second_multiple_input[2]);

    $result = taumBday($b, $w, $bc, $wc, $z);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
