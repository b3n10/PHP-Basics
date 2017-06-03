<?php
$title = "Interactive Form";
include 'head-tag.php';

if (!isset($_POST['submit'])) {
 ?>

 <form method="post">
     <input type="text" id="city" name="city" placeholder="Type your favorite city..">
     <button type="submit" name="submit" type="submit">Enter</button>
 </form>

 <?php
 } else {
    $city = $_POST['city'];

    echo "Your favorite city is {$city}.";
}

include 'end-tag.php';
  ?>
