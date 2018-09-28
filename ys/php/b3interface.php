<?php
require('../login_fail.php');
	interface demo{

		const HOST='localhost';	
		const USER='admin';
	
		function fun1();
		function fun2();
	}

	abstract class test implements demo {

	
	}
	
	class test1 implements demo {

		function fun1(){
		
		}
		
		function fun2(){
	
		
		}
	}	

	interface demo2 extends demo {
		function fun3();
		function fun4();
	}
	
	class test2 implements demo2 {
	
		function fun1(){
		
		}
		function fun2(){
		
		}
		
		function fun3(){
		
		}
		function fun4(){
		
		}
	
	}
	
	interface demo3{
	
		function fun5();
	
	}

	class test3 extends test2 implements demo,demo2,demo3 {
	
		function fun1(){
		
		}
		function fun2(){
		
		}
		function fun3(){
		
		}
		function fun4(){
		
		}
		function fun5(){
		
		}
	
	}
?>
