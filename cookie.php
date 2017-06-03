<?php

$title = 'Cookie';
require_once 'head-tag.php';

$expire_date = time() + (60*60*24); // 24hours from today
setcookie( 'login_name', 'Ben Lleve', $expire_date, '', '', '', TRUE );

?>

<p>
Login Name: <?php echo $_COOKIE['login_name']; ?>
<br>
<pre><?php var_dump( $_COOKIE ); ?></pre>
</p>

<?php

require_once 'end-tag.php';

?>
