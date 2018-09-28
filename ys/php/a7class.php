<?php
require('../login_fail.php');
/*
	__call()
		作用： 在调用对象中不存在的方法时就会出现系统报错，然后程序退出
		什么时候自动调用： 就会在调用一个对象中不存在的方法时自动调用
		处理一些不存在方法错误调用
		这个方法需要两个参数

	__clone()
		克隆对象使用clone去处理
		原本（原来的对象）
		复本 （复制出来的对象）
	
		__clone()就是在克隆对象自动调用的方法
		
		只要一个对象一生成，就要有初始化的动作,和构造方法__construct 作用相似

		在__clone()方法中的 $this关键字，代表的是复本.$that(待确认) 代表原本对象
	
	__autoload()
		注意：其它魔术方法都是在类中添加起作用，这是一个唯一一个不在类中添加的方法
		只要页面中使用一个类，只要用到类名就会将类名传给这个参数

		//自动将当前目录下 类名.class.php
		function __autoload(){
			include "./".$classname.".class.php";
		}

	对象串行化： 将一个对象转换为二进制串（对象是存储在内存）
		1. 将对象长时间存储在数据库或文件中时
		2. 将对象在多个php文件中传输时

		serialize(); 参数是一个对象，返回来的就是串行花后的二进制串
		unserialize(); 参数就是对象的二进制串，返回来的就是新生成的对象
	__sleep()
		
		是在序列化时自动调用的方法

		作用：就是可以将一个对象部分串行化
			只要这个方法中返回一个数组，数组中有几个成员属性，如果不加这个方法，则所有方法都被序列化
	__wakeup()
		是在反序列化时自动调用的方法
		也是对象重新诞生的一个过程
	
*/

 //final class person{
 class person{

	var $name;
	protected $age;
	protected $sex;
	static $country="中国";
	const HOST='localhost';

	function __construct($name,$age,$sex){
		$this->name=$name;
		$this->age=$age;
		$this->sex=$sex;
	
	}

	function getcountry(){
		//类中使用静态成员，使用self代替类名，防止由于类名修改造成错误

		//return person::$country;
		return self::$country;
	}	
	
	function setcountry($country){

		self::$country=$country;
	}
	
	//子类重载,子类只能权限放大，不能缩小权限
	//final function say(){
	  function say(){

		echo "我的名字-：{$this->name}，我的年龄：{$this->age}，我的性别：{$this->sex} <br>";
	}

	function eat(){

	
	}

	function run(){
		echo self::HOST;
	
	}
	//call第二个参数为数组	
	function __call($methodname,$args){

		echo "你调用的方法 {$methodname}（参数:";
		print_r($args);
		echo ")不存在<br>";
	}
	
	static function hello(){
	
		echo '@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@<br>';
	}
	function __tostring(){
	
		return "用来快速获取对象的字符串表示的最便捷的方式";
	}
	
	function __clone(){
		$this->name="副本"."zhangsan";
		$this->age=0;
	}
	
	function __sleep(){
		//没有对sex 串行化
		return array('name','age');
	}
	
	function __wakeup(){
	
		$this->name='sanzhang';
		$this->age=$this->age+1;
	}

	function __destruct(){

		echo $this->name.'<br>';
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

$p=new person('aaa',10,'男');

$p->test(10,20,30);
$p->demo('aaa','bbb');

$p->say();

echo $p;

//不是克隆，不是两个对象,只是增加一个快捷方式
echo '<br>########################<br>';
$p1=$p;

$p1->say();
$p->name="zhangsan";

$p1->say();
$p->say();
//

echo '########################<br>';
$p2=clone $p;
$p->name="lisi";

$p1->say();
$p2->say();
$p->say();
echo '########################<br>';
?>
