<?php

//$POST and $GET are superglobal arrays
//http://localhost/superglobals_GET2.php?uname=ben

if (isset($_GET['uname'])) {
	echo '<h1>Your username is ' . $_GET['uname'] . '</h1>';
}

