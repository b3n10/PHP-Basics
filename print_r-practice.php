<?php

//same as var_dump but doesn't show variable type
$users = [
	['name' => 'ben', 'age' => '28'],
	['name' => 'dhay', 'age' => '29'],
];

echo '<pre>', print_r($users), '</pre>';
