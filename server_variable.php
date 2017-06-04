<?php

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

$host = $_SERVER['HTTP_HOST'];
$path = rtrim(dirname($_SERVER['PHP_SELF']), "/\\");
echo "<a href=\"http://" . $host . $path . "\"/>LINK</a>";


?>
