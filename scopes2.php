<?php

//scopes = variables on certain places of the program
//any variable created outside of function are not accessible within the function and vice-versa

$config = [
	'separator' => '_',
];

$full_name = function ($first_name, $last_name) use ($config) { //use keyword can only used in this function variation
	return "{$first_name}{$config['separator']}{$last_name}";
};

echo $full_name('ben', 'lleve'); //also passing variable as an arg to a function can fix scopes
