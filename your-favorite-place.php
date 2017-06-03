<?php

$place = $_POST['favorite-place'] ?? null;

if ( empty(trim($place)) ) { header('Location: HTML-form.php'); }

echo "So your favorite place to go is {$_POST['favorite-place']}!";
