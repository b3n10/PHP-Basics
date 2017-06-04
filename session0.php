<?php
$title = "Sessions";
require_once 'head-tag.php';

session_start();

if ( isset($_SESSION['views']) ) {
	$_SESSION['views'] = $_SESSION['views'] + 1;
} else {
	$_SESSION['views'] = 1;
}
?>

<p>
Page Views: <?php echo $_SESSION['views']; ?>
</p>

<p>
Click <a href="session-destroy.php">here</a> to Destroy Session
</p>

<?php

require_once 'end-tag.php';
?>
