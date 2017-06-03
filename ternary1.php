<?php

//ternary operator
$username = isset($_GET['username']) ? $_GET['username'] : 'none';

echo '<p>Your username is set to ' . $username . '</p>';
