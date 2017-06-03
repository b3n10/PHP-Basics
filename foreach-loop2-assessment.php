<?php

//foreach (arrays as index => array) {
//	body to loop
//}

$agents = array('ben', 'abel', 'alma');

foreach ($agents as $ind => $agent) {
	echo '<strong>' . $ind . '</strong>' . ': ' . $agent . '<br/>';
}

