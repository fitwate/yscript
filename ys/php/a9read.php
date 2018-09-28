<?Php
require('../login_fail.php');
	require "a7class.php";
	$str=file_get_contents("a8mess.txt");
	$pp=unserialize($str);
	
	echo "<br>RRRRRRRRRRRRRRRRRRRRRRRRR<br>";
	
	var_dump($pp);
	echo '<br>';
	echo $pp->say();
	echo "<br>RRRRRRRRRRRRRRRRRRRRRRRRR<br>";


?>
