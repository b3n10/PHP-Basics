<?php

$title = "Index Page";
$style = "error-style";

require_once 'head-tag.php';


if ( isset($_POST['in-submit']) ) {
	check_array();
} else {
	display_form( array() );
}

function check_array() {
	$array = [];
	foreach ($_POST as $key => $value) {
		if (!$value) {
			$array[] = $key;
		}
	}
	display_form( $array );
}

function validate($fieldname, $array) {
	if ( in_array($fieldname, $array) ) {
		echo "class='error'";
	}
}

function display_form( $array ) {
?>

<form action="check-form.php" method="post">
	<label <?php validate( 'txt1', $array );  ?> >First Name:</label>
	<input type="text" name="txt1">
	<button type="submit" name="in-submit">Submit</button>
</form>

<?php
}

require_once "end-tag.php";

?>
