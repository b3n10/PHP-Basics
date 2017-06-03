<?php
$title = 'Cookie';
require_once 'head-tag.php';

:$expire_date = time() + (1); // 24hours from today
date_default_timezone_set('Asia/Manila');

if ( !isset($_COOKIE['last_login_time']) ) {
	$TIMELOG = date(DATE_RFC2822);
	setcookie( 'loginname', 'Ben Lleve', $expire_date, '', '', '', TRUE );
	setcookie( 'last_login_time', $TIMELOG, $expire_date, '', '', '', TRUE );
}
?>

<p>
Login Name: <?php echo $_COOKIE['loginname']; ?>
<br>
Last Login: <?php echo $_COOKIE['last_login_time']; ?>
<br>
<pre><?php var_dump( $_COOKIE ); ?></pre>
</p>

<?php
require_once 'end-tag.php';
?>
