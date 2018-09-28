<?php
require('../login_fail.php');
class person{

	protected $name;
	protected $age;
	protected $sex;

	function __construct($name,$age,$sex){
		$this->name=$name;
		$this->age=$age;
		$this->sex=$sex;
	
	}
	
	//子类重载,子类只能权限放大，不能缩小权限
	protected function say(){

		echo "我的名字-：{$this->name}，我的年龄：{$this->age}，我的性别：{$this->sex} <br>";
	}

	function eat(){

	
	}

	function run(){

	
	}
}
class student extends person {

	var $school;
	function __construct($name,$age,$sex,$school){
		parent::__construct($name,$age,$sex);
		$this->school=$school;

	}

	function study(){
	
		echo "{$this->name}在学习.<br>";
	}
	//子类重载,子类只能权限放大，不能缩小权限
	public function say(){
		//person::say(); parent代替父类名称
		parent::say();
		echo "我所在的学校{$this->school} <br>";
	}
}

$s=new student('lisi',20,'男','csdn');
$s->say();
$s->study();


?>
