<?php

$schools = [
	"hau",
	"auf",
	"aclc",
	"ssc",
	"up",
];

$selected_school = "";

if ( isset($_GET['submit']) ) {
	$selected_school = $_GET['select'];
}

?>

<form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
	<select name="select">
		<option value=""></option>
			<?php
				foreach ($schools as $school) {
					echo "<option value=\"" . $school . "\"";
					if ($selected_school == $school) echo " selected";
					echo ">$school</option>\n";
				}
			?>
	</select>
	<input type="submit" name="submit" value="Submit">
</form>
