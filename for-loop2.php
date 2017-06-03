<?php

//for loop

$agents = array('fred', 'ric', 'ben', 'philip', 'ardee', 'gian', 'april', 'katkat', 'tintin', 'dhay');

echo 'Currently remaining agents for DRT:<br/>';

for ($i = 0; $i < count($agents) ; $i++) {
	echo '<strong>' . $agents[$i] . '</strong>'  . '<br/>';
}

