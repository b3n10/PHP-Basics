<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Multiplication Table</title>
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
	</head>
	<body>
		<form method="get">
			<label>Enter Integer:</label>
			<br>
			<input type="text" name="number">
			<button type="submit" name="submit">Submit!</button>
		</form>
<?php
if ( isset($_GET['number']) ) {
	$number = $_GET['number'];
	$result = 1;

	echo "Multiplication Table for number {$_GET['number']}";

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
}
?>
	</body>
</html>
