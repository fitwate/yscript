<?php
/*
header("location: ./login_ok.html");
*/

session_start();
require('./logout.php');
if(isset($_POST['username']) && $_POST['password']){

        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
/*实时刷新*/
}

if(isset($_SESSION['username']) && $_SESSION['password']){

        echo "login success <br>user:".$_SESSION['username']."<br> password:".$_SESSION['password'];
        echo "<br>";
        echo "<a href='./gl.html'>进入主页面</a>";
        echo "<br>";
        echo "<a href='?out=out'>logout</a>";
}

?>
