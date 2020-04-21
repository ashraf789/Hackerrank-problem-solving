<?php
/**
 * @author: syed ashraf ullah
 * date: 21/04/2020
 */
// Complete the extraLongFactorials function below.
function extraLongFactorials($n) {

    $factorial = factorial($n);
    echo $factorial;
}

function factorial($n){
    if ($n == 1) return 1;
    return bcmul($n,factorial($n-1));
}

// $n = 100;
// $result = extraLongFactorials($n);
// echo $result.'<br/>';
// return;
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

extraLongFactorials($n);

fclose($stdin);
