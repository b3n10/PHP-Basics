<?php


function add(array $num) {
	$sum = 0;

	foreach ($num as $n) {
		$sum += $n;
	}

	echo $sum;
}

$array_num = [1 ,3 ,4, 56];
echo add($array_num);//pass variable of array as argument

echo '--space--';

echo add([1 ,3 ,4, 56]);//pass array directly
