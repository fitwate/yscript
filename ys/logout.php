<?php

if(isset($_GET['out'])){
        unset($_SESSION['username']);
        unset($_SESSION['password']);
	header("location: ./login.html");
}

?>
