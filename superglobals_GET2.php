<?php

//$POST and $GET are superglobal arrays
//http://localhost/superglobals_GET2.php?uname=ben&pword=secret&page=5

$username = $_GET['uname'];
$password = $_GET['pword'];
$page = $_GET['page'];
$pages = 10;

echo '<h1>Your username is ' . $username  . '</h1>';
echo '<p>and your password is ' . $password . '</p>';
echo '<p>and you are on page ' . $page . '</p>';

for ($i = 1; $i <= $pages; $i++) {
	echo '<a href="?uname=' . $username . '&pword=' . $password . '&page=' . $i . '">' . $i . '</a> ';
}
