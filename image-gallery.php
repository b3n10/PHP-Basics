<?php
//$dir = opendir('mozilla-assessment/originals');

require_once 'directory-reader.php';

$images = directory_reader('mozilla-assessment/originals');

if (!$images) { die('Could not load files.'); }

//var_dump($images);
//
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Image Gallery</title>
	</head>
	<body>
		<?php foreach ($images as $image): ?>
			<img src="<?php echo $image; ?>" style="width: 200px; height: 200px;">
		<?php endforeach; ?>
	</body>
</html>
