<?php 
require('../login_fail.php');
/* php 函数*/
echo "php function!";
echo "<br>";

echo md5("php100");
echo "<br>";
echo md5("php100");
echo "<br>";
echo date("Y-m-d");
echo "<br>";

/* 自定义函数 */
function func_ys(){
 echo "This is own function";
}
func_ys();
echo "<br>";
echo func_ys();

echo "<br>";
function func_ysa(){
 return "This is own function";
}
func_ysa();
echo "<br>";
echo func_ysa();

echo "<br>";

function func_ysb($val){
return $val;
}
echo func_ysb(123);
echo "<br>";

function func_ysc($val,$vala=1){

$ccc=$val+$vala;
return $ccc;
}
echo func_ysc(1);
echo "<br>";
echo func_ysc(1,2);
echo "<br>";

/* 判断函数是否存在 */
if(function_exists('func_ysc')){
echo "true";

}
else{
echo "false";
}
/* & 返回变量值 */
echo "<br>";
$A = "Today";
$B = "Monday";
function print_A($A,&$B){
	$B=$A." is ".$B;
	echo "function A and B key:<br>";
	echo "A key: $A <br>";
	echo "B key: $B <br>";
}
echo "<br>";
print_A($A,$B);
echo "<br>";
echo "function A and B key:<br>";
echo "A key: $A <br>";
echo "B key: $B <br>";
echo "Why B key NOT Monday";
echo "<br>";
/* 递归*/
function demoys ($num){
	echo $num."<br>";
	
	if($num>0)
		demoys ($num-1);
	else
		echo "----------------------------<br>";
	echo $num.'<br>';
	}

demoys("10");

?>
