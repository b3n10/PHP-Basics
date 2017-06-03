<?php
$title = "Sessions Destroy";
require_once 'head-tag.php';

session_start();

?>

<p>
Page Views: <?php echo ( isset($_SESSION['views']) ? $_SESSION['views'] : 0); ?>
</p>

<p>
Click <a href="session.php">here</a> to Start Session
</p>

<?php

session_destroy();

require_once 'end-tag.php';
?>

