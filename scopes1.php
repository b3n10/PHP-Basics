<?php

//scopes = variables on certain places of the program
//any variable created outside of function are not accessible within the function and vice-versa

$config = [
	'separator' => '_',
];

function fullName($first_name, $last_name) {
	global $config;//use global keyword to use variables outside the function
	return "{$first_name}{$config['separator']}{$last_name}";
}

echo fullName('ben', 'lleve'); //also passing variable as an arg to a function can fix scopes
