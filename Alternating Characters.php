<?php
/**
 * @author: syed ashraf ullah
 * date: 30/04/2020
 * problem: https://www.hackerrank.com/challenges/alternating-characters/problem
 */
// Complete the alternatingCharacters function below.
function alternatingCharacters($s) {
    $s = str_split($s);
    $match = $s[0];
    $count = 0;
    for ($i=1; $i < sizeof($s); $i++) { 
        
        if ($s[$i] == $match) {
            $count++;
            continue;
        }

        $match = $s[$i];
    }

    return $count;
}

$s = 'AAAA';
$result = alternatingCharacters($s);
echo $result;
return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = alternatingCharacters($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
