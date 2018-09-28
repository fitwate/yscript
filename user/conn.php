<?php
$conn = new mysqli('127.0.0.1','ysu','ysp') or die ("conn error");

// mysql_select_db("user",$conn) or die ("db error");

$conn -> select_db('user') or die ("db error");

$conn -> query("set names 'UTF8'");



?>
