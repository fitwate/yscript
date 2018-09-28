<?php
/*
setcookie("ys","ysvalue");
print_r($_COOKIE);

echo "<br>";
echo $_COOKIE["ys"];
*/

if(isset($_GET['out'])){

	setcookie('id','');
	setcookie('pass','');
	echo "<script>location.href='b5cookie.php'</script>";
}


if(isset($_POST['name']) && $_POST['password']){

	setcookie('id',$_POST['name'],time()+3600);
	setcookie('pass',$_POST['password'],time()+3600);
	echo "<script>location.href='b5cookie.php'</script>";
}

if(isset($_COOKIE['id']) && $_COOKIE['pass']){

	echo "login success <br>user:".$_COOKIE['id']."<br> password:".$_COOKIE['pass'];
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

