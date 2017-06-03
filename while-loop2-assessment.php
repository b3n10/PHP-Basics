<?php

//while (condition) {
////	body to run while true
////}

$number_i_want = 5;

while ( ($dice_roll = rand(1, 10)) !== $number_i_want ) {
	echo "You rolled a {$dice_roll}, we need a {$number_i_want}.<br/>";
}

echo "You rolled a {$dice_roll}.";

