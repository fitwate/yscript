<?Php
require('../login_fail.php');

class persion{
	private $name;
	private $age;
	private $sex;
	//构造函数
	function __construct($name='',$age=0,$sex='男'){
		//this 类中调用参数
		$this->name = $name;
		$this->age = $age;
		$this->sex = $sex;
	}
	//调用修改封装变量
/* 自定义方法
	function setage($age){

		$this->age=$age;
	}	

	//调用读取封装变量
	function getage(){

		return $this->age;
	}
*/

	/* 只对私有成员有作用*/
	function __set($proname,$provalue){
		echo "---$proname--------------$provalue----------<br>";
		$this->$proname=$provalue;
	
	}

	function __get($proname){
		//if 判断数值
		return $this->$proname;
	}

	function say(){
		echo "我的名字：{$this->name} 我的年龄：{$this->age} 我的性别：{$this->sex} <br>";	
	}
	
	function eat(){
	
	}

	function run(){
	
		$this->left();
		$this->left();
		$this->right();
		$this->right();
		$this->gogo();
		$this->gogo();
		$this->left();
	}
	//封装
	private function left(){

		echo "lllllllllllllllllllllllll<br>";
	}

	private function right(){

		echo "rrrrrrrrrrrrrrrrrrrrrrrrrr<br>";
	}

	private function gogo(){

		echo "gggggggggggggggggggggggggg<br>";
	}

	/* 判断变量是否存在*/
	 function __isset($proname){

		if($proname=='age')
			return false;
		return isset($this->$proname);
	}
	function __unset($proname){
	
		unset($this->$proname);
	}

	//对象关闭时，调用析构函数方法
	function __destruct(){
		echo $this->name."再见！<br>";
	}
}
	//创建对象
	$p1=new persion('zhangsan',2,3);
	$p2=new persion('lisi',3,'女');
	$p3=new persion('wangwu',6,'男');

	//调用对象方法
	$p1->say();
	//析构方法，因为p1指针清空，所以调用析构方法
	$p1=null;
	$p2->say();
	$p3->say();
	
	$p2->run();

/*
	$p2->setage(100);
	$p2->say();
	echo $p2->getage();
*/
	echo $p2->name.'<br>';
	echo $p2->age.'<br>';
	echo $p2->sex.'<br>';

	$p2->name='zhangxiaosan';
	$p2->age=666;
	$p2->sex='男';
	
	$p3->say();

/* 判断是否为私有变量*/
if (isset($p2->sex)){
	echo "存在 <br>";
}
else {
	echo "不存在 <br>";
}
unset($p2->age);
if (isset($p2->sex)){
	echo "存在 <br>";
}
else {
	echo "不存在 <br>";
}


?>
