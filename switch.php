<?php

$day_today = 'Benday';

//make sure condition on switch is always true to go through cases
switch (true) {
	case $day_today == 'Monday';
		echo "It's {$day_today}.";
		break;
	case $day_today == 'Tuesday';
		echo "It's {$day_today}.";
		break;
	default:
		echo "I don't know what is {$day_today}.";
		break;
}
