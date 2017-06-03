<?php

//func_get_args will show all arguments passed on the function; only useful if numbers of args passed are not clear

function add() {
	$sum = 0;

	foreach (func_get_args() as $num) {
		$sum += $num;
	}

	echo $sum;
}

echo add(5, 3, 838);
