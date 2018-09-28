<?php 
require('../login_fail.php');
		require "a7class.php";
		
		$p=new person('张三',100,'男');
		
		//serialize() 参数为一个对象，返回一个二进制串
		$str=serialize($p);
		file_put_contents("a8mess.txt","$str");

?>
