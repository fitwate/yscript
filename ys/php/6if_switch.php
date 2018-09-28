<?php
require('../login_fail.php');
$a=2;
if($a==2){
	echo "true";
	}
else{
	echo "error";
	}
echo "<br>";
if($a==3){
	echo "true";
	}
else{	
	echo "error";
	}
/* switch */
echo "<br>";
$b=2;
switch($b){
	case 10:
	case 0:
	echo "output 0";
	break;
	case 1:
	echo "output 1";
	break;
	case 2:
	echo "output 2";
	break;
	default:
	echo "Error!";
}

?>
