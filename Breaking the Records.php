<?php
/**
 * @author: syed ashraf ullah
 * date: 26/04/2020
 * problem: https://www.hackerrank.com/challenges/breaking-best-and-worst-records/problem
 */
// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $highestScore = $scores[0];
    $lowestScore = $scores[0];

    $count = array();
    $count[0] = 0;
    $count[1] = 0;

    foreach ($scores as $value) {
        if ($value > $highestScore) {
            $highestScore = $value;
            $count[0]++;
        }

        if ($value < $lowestScore) {
            $lowestScore = $value;
            $count[1]++;
        }
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
