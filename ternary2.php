<?php

//like ternary operator - not a variation which is simpler
$username = $_GET['username'] ?? 'none';

echo '<p>Your username is set to ' . $username . '</p>';
