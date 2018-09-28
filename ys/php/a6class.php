<?php
require('../login_fail.php');
/*
final
	1. final 只能修饰类和方法
	
	作用：
		使用final修饰的类 不能被子类继承
		使用final修饰的方法 不能被子类覆盖
static
	1. 使用static可以修饰成员属性和成员方法 不能修饰类
	2. 用static修饰的成员属性和方法，可以被同一类的所有对象共享
	3. 静态的数据是存在 内存中的 数据段中（初始化静态段）
	4. 静态的数据是在类每一次加载时 分配到内存中的，以后再用到类时就直接从数据段中获取
	5. 什么是类被加载？ 只要在程序中使用到这个类（有类名出现）
	可以修改设置值,一个对象改动，全部改动
	注意： 静态的成员都要用类名去访问，不用创建对象，不用对象去访问
		类名::静态成员
	如果在类中使用静态成员、可以使用self代表本类（$this)
	
	6. 静态方法（static修饰的方法），不能访问非静态的成员（在非静态方法中，可以访问静态成员）
	因为非静态成员，就必须用对象来访问，访问内部的成员使用的$this
	静态方法 不用使用对象来调用，也就没有对象，$this也就不能代表什么对象，非静态的成员还必须使用对象

	如果你确定一个方法不使用非静态成员，则可以将这个方法声明为静态方法(不用创建对象，直接使用类名 就可以访问)

const   1. 它只能修饰成员属性
	2. 类中声明常量属性使用const
	3. 命名的方式和我们以前学习 define 是一样的效果
	4. 访问方式和static静态成员属性一样（类外部使用 类名::常量，在类内部使用 self::常量）
	5. 常量一定要在声明时就给初值

*/

 //final class person{
 class person{

	protected $name;
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
	protected  function say(){

		echo "我的名字-：{$this->name}，我的年龄：{$this->age}，我的性别：{$this->sex} <br>";
	}

	function eat(){

	
	}

	function run(){
		echo self::HOST;
	
	}
	
	static function hello(){
	
		echo '@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@<br>';
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

//类外部访问静态成员，必须使用类名称
person::$country='English';
echo person::$country.'<br>';

$p1=new person('aa',11,'aaa');
$p2=new person('bb',22,'bbb');
$p3=new person('cc',33,'ccc');

echo $p1->getcountry().'<br>';
echo $p2->getcountry().'<br>';
echo $p3->getcountry().'<br>';

$p1->setcountry('china');

echo $p1->getcountry().'<br>';
echo $p2->getcountry().'<br>';
echo $p3->getcountry().'<br>';

//静态方法可以直接访问
	person::hello();
//常量直接访问
echo person::HOST;
?>
