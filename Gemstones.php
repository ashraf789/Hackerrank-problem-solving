<?php
/**
 * @author: syed ashraf ullah
 * date: 30/04/2020
 * problem: https://www.hackerrank.com/challenges/gem-stones/problem
 */
// Complete the gemstones function below.
function gemstones($arr) {

    // Define a array of size a-z => 97-123 which default value is zero
    $gem = array_fill(97,123,0);
    $size = sizeof($arr);

    for ($i=0; $i < $size; $i++) { 
        $stone = str_split($arr[$i]);

        $s = sizeof($stone);
        foreach ($stone as $key => $value) {

            // A character will only be gem when it present on all previous stone.
            // Increase the index value one when it also present on all previous stone. 
            if ($gem[ord($value)] == $i) {
                $gem[ord($value)] = $i+1;
            }
        }
    }

    $count = 0;
    foreach ($gem as $value) {

        // Index value == total stone => gem
        if($value == $size) $count++;
    }
    return $count;
}
/**
 * Sample #1
 */
// $arr = array('abcdde', 'baccd', 'eeabg');
// $arr = array('basdfj', 'asdlkjfdjsa', 'bnafvfnsd', 'oafhdlasd');

// $result = gemstones($arr);
// echo $result;
// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_item = '';
    fscanf($stdin, "%[^\n]", $arr_item);
    $arr[] = $arr_item;
}

$result = gemstones($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
