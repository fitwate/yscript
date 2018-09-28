<?php
require('../login_fail.php');
	abstract class filedir{
	
		var $filename;
		var $time;
		
		function getname(){
	
			echo '1111111111111111111<br>';
		}
		
		function gettime(){
			echo '22222222222222222222<br>';
		}

		abstract function getsize();
		abstract function copy();
		abstract function remove();
		abstract function delete();
	}
	
	class fileclass extends filedir{

		function getsize(){
			echo '3333333333333333<br>';
		}
		
		function copy (){
		
			echo '444444444444<br>';
		}
		function remove (){
		
			echo '55555555555<br>';
		}
		function delete (){
		
			echo '666666666666666666<br>';
		}
	}

	$fd=new fileclass;

	
	$fd->getname();
	$fd->getsize();
	$fd->copy();
	$fd->remove();
	$fd->delete();
	$fd->gettime();
	

?>
