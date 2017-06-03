<?php
/*invoke a function = means call a function*/
$last_name = 'rikardo';
$full_name = fullName('aden', $last_name);

echo $full_name;//can call function before declaration statement

//optional variable always the last parameter
function fullName($first_name, $last_name, $separator = '-') {
	return "{$first_name}{$separator}{$last_name}";
}

echo '<br>------<br>';

/*another variation of function, but can't call this function before declaring it*/
$a_full_name = function($first_name, $last_name = null, $separator = '-') {
	if (trim($first_name) === '') { return;  }
	if (!$last_name) { return "{$first_name}"; }
	return "{$first_name}{$separator}{$last_name}";
};

echo $a_full_name('lex');//first name only
echo $a_full_name('lex', 'thor');//first and last name
var_dump($a_full_name('   '));//only spaces
