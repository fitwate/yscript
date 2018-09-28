<?php
include("login_fail.php");

 echo '<br>';
 if(isset($_SESSION['priv']) && $_SESSION['priv']==1 ){
   echo '<br>';
   echo " <a  href='list.php' target='main'>查询用户<a> | | ";
   echo "<a  href='register.php' target='main'>增加用户<a> | | ";
   echo "<a  href='actionlog.php' target='main'>操作日志<a> | | ";
 }

   echo "<a  href='user.php' target='main'>用户主页<a>";
  // echo " | | <a href='login.php' target='_parent'>返回登录成功页面</a>";

 if(isset($_SESSION['username']) && isset($_SESSION['password'])){
   echo " | | loging user:".$_SESSION['username'] ."";
 }
   echo " | | <a href='login.php?out=out' target='_parent'>logout</a>";
?>
