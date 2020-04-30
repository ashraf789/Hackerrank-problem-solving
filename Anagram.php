<?php
/**
 * @author: syed ashraf ullah
 * date: 30/04/2020
 * problem: https://www.hackerrank.com/challenges/making-anagrams/problem
 */
// Complete the anagram function below.
function anagram($s)
{
    // Convert string to char array
    $s = str_split($s);
    $size = sizeof($s);
    
    if ($size%2 != 0) return -1;

    // Two array from index no a-z or 97-122 with initial value 0
    $s1 = array_fill (97,123,0);
    $s2 = array_fill (97,123,0);

    $size = $size/2;
    // Count indexs
    for ($i=0, $j=$size; $i < ($size); $i++,$j++) { 
        $s1[ord($s[$i])]++;
        $s2[ord($s[$j])]++;
    }
    
    $count = 0;
    foreach ($s1 as $key => $value) {
        // Count total missing character from first string to second string
        if ($s1[$key] > $s2[$key]) {
            $count += ($s1[$key] - $s2[$key]);
        }
    }

    return $count;
}

/**
 * Sample #1
 */
// $s = 'xaxbbbxx';
// $s = 'xyyx';
// $s = 'aaabbb';

// $result = anagram($s);
// echo $result;
// return;


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = anagram($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
