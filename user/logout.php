<?php

if(isset($_GET['out'])){
        
        //记录登出日志
        $sid=SESSION_ID();
        $xforwarded='';
        isset($_SERVER['HTTP_X_FORWARDED_FOR'])?$xforwarded=$_SERVER['HTTP_X_FORWARDED_FOR']:$xforwarded='HTTP_X_FORWARDED_FOR undefined ';
        $sql2="insert into userlog (id,actiondate,actionuser,action,actioninfo)" .
              "values ('',now(),'$_SESSION[username]','会话','登出||$_SERVER[REMOTE_ADDR]||$sid||$xforwarded')";
        $conn -> query("$sql2");

        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['priv']);
	unset($_SESSION['pagenum']);
	header("location: ./login.html");

}

?>
