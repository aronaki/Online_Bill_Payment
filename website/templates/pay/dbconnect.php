<?php 

$connection = mysql_connect("localhost","root","123") or die("server not connected");
$db = mysql_select_db("16ucs114", $connection) or die("db not connected");
?>