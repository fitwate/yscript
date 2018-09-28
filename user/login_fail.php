<?php

session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['password'])){
	
	}
	else {

        	echo "login fail <br>Deny  acess,please login";
      		echo "<br>";
         	echo "<a href='./login.html' target='_parent'>login</a>";
		
		exit();
	
	}

?>
