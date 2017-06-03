<?php

//while (condition) {
////	body to run while true
////}

$current_number = 1;
$end_at = 10;
$increment_by = 1;

while ($current_number <= $end_at) {
	echo $current_number . '<br/>';
	$current_number += $increment_by;
}
