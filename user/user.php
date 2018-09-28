<?php
include("login_fail.php");
include("conn.php");

   $sqluser="select actioninfo from userlog where actionuser='$_SESSION[username]' and action='会话' order by id desc limit 1,1";
   $query=$conn -> query($sqluser);
   $rowuser=$query -> fetch_array();
   $actioninfoarr=explode("||",$rowuser['actioninfo']);
   
   $xforwarded="";
   isset($_SERVER['HTTP_X_FORWARDED_FOR'])?$xforwarded=$_SERVER['HTTP_X_FORWARDED_FOR']:$xforwarded='HTTP_X_FORWARDED_FOR undefined ';

   echo "本次访问IP: ".$_SERVER["REMOTE_ADDR"].'<br>';
   echo "本次访问 x forward IP: ".$xforwarded.'<br>';
   echo "上次访问IP: ".$actioninfoarr[1].'<br>';
   echo "上次访问 x forward IP: ".$actioninfoarr[3].'<br>';
?>
