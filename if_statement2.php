<?php

//nesting

$daysOfWeek = [
	1 => 'Monday',
	2 => 'Tuesday',
	3 => 'Wednesday',
	4 => 'Thursday',
	5 => 'Friday',
	6 => 'Saturday',
	7 => 'Sunday',
];

$dayOfWeek = 6;

if (in_array($dayOfWeek, array_keys($daysOfWeek))) {
	echo 'We have ' . $daysOfWeek[$dayOfWeek] . ' as a valid day.';
	if ($daysOfWeek[$dayOfWeek] == 'Saturday') {
		echo ' It is your day off :)';
	}
} else {
	echo 'Not a valid date';
}
