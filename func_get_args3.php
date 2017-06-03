<?php

//func_get_args() will show all arguments passed on the function

function add() {
	$sum = 0;

	foreach (func_get_args() as $num) {
		if (!is_int($num)) { continue; } //is_int() will check if arg is integer or not; is_numeric() identical function
		$sum += $num;
	}

	echo $sum;
}

echo add(5, 3, 838, 'ben', 100, 'not me', 34);
