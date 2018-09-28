<?php
/*
setcookie("ys","ysvalue");
print_r($_COOKIE);

echo "<br>";
echo $_COOKIE["ys"];
*/

/* session_start 放在最开始*/
session_start();

if(isset($_GET['out'])){
	unset($_SESSION['id']);
	unset($_SESSION['pass']);
}


if(isset($_POST['name']) && $_POST['password']){

	$_SESSION['id']=$_POST['name'];
	$_SESSION['pass']=$_POST['password'];
/*实时刷新*/
}

if(isset($_SESSION['id']) && $_SESSION['pass']){

	echo "login success <br>user:".$_SESSION['id']."<br> password:".$_SESSION['pass'];
	echo "<br>";	
	 echo "<a href='?out=out'>logout</a>";	
}
?>

<form action="" method="post">

username:
<input type="text" name="name" ><br><br>

password:
<input type="password" name="password" ><br><br>
<input type="submit" value="submit">
</form>

