<?php

$conn = @mysql_connect("localhost","ysu","ysp") or die ("conn error");

mysql_select_db("ysceshi",$conn) or die ("db error");

mysql_query("set names 'UTF8'");

?>
