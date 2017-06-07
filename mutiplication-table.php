<?php

echo "
<style>
	table { text-align: center; }
	td {
 		border: solid black 1px;
		border-radius: 2px;
		width: 25px;
		padding: 10px;
		background: #ccc;
	}
</style>	
";

$number = 8;
$result = 1;

echo "<table>";

for ( $i = 1 ; $i <= $number ; $i++) {
	echo "<tr>";
	for ( $y = 1 ; $y <= $number ; $y++) {
		$result = $i * $y;
		echo "<td>{$result}</td>";
	}
	echo "</tr>";
	
}

echo "</table>";
