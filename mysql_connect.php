<?php
$dbc=mysqli_connect('localhost','root',NULL,'appdev');

if (!$dbc) {
 die('Could not connect: '.mysql_error());
}

?>