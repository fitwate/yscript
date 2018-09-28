<?Php
require('../login_fail.php');
abstract class demo{
	var $name;
	var $age;
		
	abstract function test(); 
	abstract function fun(); 

	function say(){

		echo "###########################";
	}

	function run(){

	
	}
}

class hello extends demo{

	function test(){

		echo '111111111111111111<br>';
	}

	function fun(){

		echo '2222222222222222222222<br>';
	}
}

	$h=new hello;
	$h->test();

?>
