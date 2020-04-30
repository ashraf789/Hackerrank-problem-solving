<?php

/**
 * Queen's Attack II
 * url: https://www.hackerrank.com/challenges/queens-attack-2/problem
 *
 * @author: syed ashraf ullah
 * date: 11.04.2020
 *
 * Algorithm:
 * right() -> ($r_q, $c_q+1)
 * left() -> ($r_q, $c_q-1)
 * up() -> ($r_q+1, $c_q)
 * down() -> ($r_q-1, $c_q)
 * upLeftCorner() -> ($r_q-1, $c_q-1)
 * upRightCorner() -> ($r_q-1, $c_q+1)
 * downLeftCorner() -> ($r_q+1, $c_q-1)
 * downRightCorner() -> ($r_q+1, $c_q+1)
 */

// Complete the queensAttack function below.
function queensAttack($n, $k, $r_q, $c_q, $obstacles) {
	
	$obstaclesLocation = array();
	foreach ($obstacles as $value) {
		$obstaclesLocation[$value[0]][$value[1]] = 1;
	}

	$total = right($n, $k, $r_q, $c_q, $obstaclesLocation)
			+ left($n, $k, $r_q, $c_q, $obstaclesLocation)
			+ up($n, $k, $r_q, $c_q, $obstaclesLocation)
			+ down($n, $k, $r_q, $c_q, $obstaclesLocation)
			+ upLeftCorner($n, $k, $r_q, $c_q, $obstaclesLocation)
			+ upRightCorner($n, $k, $r_q, $c_q, $obstaclesLocation)
			+ downLeftCorner($n, $k, $r_q, $c_q, $obstaclesLocation)
			+ downRightCorner($n, $k, $r_q, $c_q, $obstaclesLocation)
			;
	return $total;
}

/**
 * All conditions to terminate the program	
 */
function isConditionTrue($n, $k, $r_q, $c_q, $obstacles)
{
	if ($r_q < 1 || $r_q > $n) {
		return true;
	}	

	if ($c_q < 1 || $c_q > $n) {
		return true;
	}	

	// There is a obstacle at location $r_q, $c_q
	if (isset($obstacles[$r_q][$c_q])) {
		return true;
	}
	return false;
}

// Calculate all possible move from queen position
function right($n, $k, $r_q, $c_q, $obstacles)
{
	$c_q++;
	if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
		return 0;
	}

	return 1 + right($n, $k, $r_q, $c_q, $obstacles);
}

function left($n, $k, $r_q, $c_q, $obstacles)
{
	$c_q--;

	if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
		return 0;
	}

	return 1 + left($n, $k, $r_q, $c_q, $obstacles);
}

function up($n, $k, $r_q, $c_q, $obstacles)
{
	$r_q++;

	if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
		return 0;
	}

	return 1 + up($n, $k, $r_q, $c_q, $obstacles);
}
function down($n, $k, $r_q, $c_q, $obstacles) 
{
	$r_q--;

	if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
		return 0;
	}

	return 1 + down($n, $k, $r_q, $c_q, $obstacles);
}


// All corner move
function upLeftCorner($n, $k, $r_q, $c_q, $obstacles) 
{
	$r_q--;
	$c_q--;

	if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
		return 0;
	}

	return 1 + upLeftCorner($n, $k, $r_q, $c_q, $obstacles);
}

function upRightCorner($n, $k, $r_q, $c_q, $obstacles) 
{
	$r_q--;
	$c_q++;

	if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
		return 0;
	}

	return 1 + upRightCorner($n, $k, $r_q, $c_q, $obstacles);
}

function downLeftCorner($n, $k, $r_q, $c_q, $obstacles) 
{
	$r_q++;
	$c_q--;

	if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
		return 0;
	}

	return 1 + downLeftCorner($n, $k, $r_q, $c_q, $obstacles);
}

function downRightCorner($n, $k, $r_q, $c_q, $obstacles) 
{
	$r_q++;
	$c_q++;

	if (isConditionTrue($n, $k, $r_q, $c_q, $obstacles)) {
		return 0;
	}

	return 1 + downRightCorner($n, $k, $r_q, $c_q, $obstacles);
}

/** 
 * sample input #1
 * expexted output 9 
 */

// $n = 4;
// $k = 0;
// $r_q = 4;
// $c_q = 4;
// $obstacles = array();

/** 
 * sample input #3
 * expexted output 10 
 */

// $n = 5;
// $k = 3;
// $r_q = 4;
// $c_q = 3;

// $obstacles = array();

// $obstacles[0][0] = 5;
// $obstacles[0][1] = 5;
// $obstacles[1][0] = 4;
// $obstacles[1][1] = 2;
// $obstacles[2][0] = 2;
// $obstacles[2][1] = 3;

// $result = queensAttack($n, $k, $r_q, $c_q, $obstacles);

// echo $result;

// return;

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $r_qC_q_temp);
$r_qC_q = explode(' ', $r_qC_q_temp);

$r_q = intval($r_qC_q[0]);

$c_q = intval($r_qC_q[1]);

$obstacles = array();

for ($i = 0; $i < $k; $i++) {
    fscanf($stdin, "%[^\n]", $obstacles_temp);
    $obstacles[] = array_map('intval', preg_split('/ /', $obstacles_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = queensAttack($n, $k, $r_q, $c_q, $obstacles);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
