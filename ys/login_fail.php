<?php

session_start();
	if(isset($_SESSION['username']) && $_SESSION['password']){
	echo 'loging user: '.$_SESSION['username'].'<br>';
	echo "<a href='../login.php' target='_parent'>返回登</a>".'<br>';
	echo '<hr>';
	
	}
	else {

        	echo "login fail <br>Deny  acess,please login";
      		echo "<br>";
         	echo "<a href='../login.html' target='_parent'>login</a>";
		
		exit();
	
	}

?>
