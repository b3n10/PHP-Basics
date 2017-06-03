<?php

//array_sum() will sum up all array values; only accepts array

//echo array_sum([5, 6, 5]);

function add() {
	return array_sum(func_get_args());//can use func_get_args() inside array_sum()
}

echo add(4, 3, 2);
