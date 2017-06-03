<form method="POST" enctype="multipart/form-data">
	<input type="file" name="puto">
	<button id="sbt" type="submit">Ok</button>
</form>

<?php

if ( isset($_FILES['puto']) ) {
	echo '<pre>';
	print_r($_FILES['puto']);
	echo '</pre>';
	echo move_uploaded_file($_FILES['puto']['tmp_name'], '/home/b3n/zzz/');
}
