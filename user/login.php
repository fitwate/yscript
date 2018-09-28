<?php

session_start();
include("conn.php");
require('logout.php');

if(isset($_SESSION['check_pic'])&&isset($_POST['check_pic'])&&($_SESSION['check_pic']!=$_POST['check_pic'])){

	echo '验证码错误'.'<br>';
	echo "<a href='./login.html' target='_parent'>返回登陆</a>";
        exit();

}

if(isset($_POST['username']) && $_POST['password'] && $_POST['login_sub'])
{

	
        $sql="select password,priv from user where username='$_POST[username]' limit 1";
        $query=$conn -> query($sql);
        $row=$query -> fetch_array();	

	if($row['password'] == md5($_POST['password']))
	{

        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['priv']=$row['priv'];
	
	}
	else
	{
	echo '登录失败，用户或密码错误'.'<br>';
	echo "<a href='./login.html' target='_parent'>返回登陆</a>";
	exit();
	}
}



if(isset($_SESSION['username']) && $_SESSION['password']){

        echo "login success <br>user:".$_SESSION['username']."<br> password:".$_SESSION['password'];
        echo "<br>";
        echo "user priv:".$_SESSION['priv'];
	echo "<br>";
	
        echo "<a href='./master.html'>进入主页面</a>";
        echo "<br>";
        echo "<a href='?out=out'>logout</a>";

        //记录登陆日志
	$sid=SESSION_ID();
	$xforwarded='';
	isset($_SERVER['HTTP_X_FORWARDED_FOR'])?$xforwarded=$_SERVER['HTTP_X_FORWARDED_FOR']:$xforwarded='HTTP_X_FORWARDED_FOR undefined ';
        $sql2="insert into userlog (id,actiondate,actionuser,action,actioninfo)" .
              "values ('',now(),'$_SESSION[username]','会话','登陆||$_SERVER[REMOTE_ADDR]||$sid||$xforwarded')";
        $conn -> query("$sql2");

}
else 
{
mysqli_close($conn);	
echo '请输入用户名和密码';
}
?>
