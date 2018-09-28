<?php
require('../login_fail.php');
$arr1=range(1,10,2);

print_r($arr1);

echo "<br>";
$arr2=range('a','z',2);

print_r($arr2);

echo "<br>";
echo array_sum($arr1);
echo "<br>";


$arr2=range('a','z',2);
print_r($arr2);
echo "<br>";


$arr3=array_merge($arr1,$arr2);
print_r($arr3);
echo "<br>";

#array_rand 返回数组中的随机键名
echo $arr3[array_rand($arr3)];
echo "<br>";

#shuffle() 函数把数组中的元素按随机顺序重新排列
print_r($arr3);
echo "<br>";
 shuffle($arr3);
print_r($arr3);
echo "<br>";
echo "<br>";

#array_slice() 从数组的第3个元素开始取出，并仅返回11个元素
$arr4=array_slice($arr3,3,11);

$datays="";
foreach($arr4 as $key => $value)
$datays.=$value;

echo $datays;
echo "<br>";
echo md5($datays);
echo "<br>";

$datays2="";
foreach($arr3 as $key => $value)
$datays2.=$value;

echo $datays2;

#转换索引数组
$lampys=array("os"=>"linux","webserver"=>"apache","db"=>"mysql","language"=>"php");
$arr=array_values($lampys);
echo '<pre>';
print_r($arr);
echo '</pre>';

list($os,$wb,$db,$lang)=$arr;

echo $os.'<br>';
echo $wb.'<br>';
echo $db.'<br>';
echo $lang.'<br>';
/*
array_filter();
array_walk();
array_map();
*/
#######
$a1=array("os","web","db","lang");
#入栈1
$a1[]="one";
$a1[]="two";

#入栈2 ，不推荐使用
array_push($a1,"three");
array_push($a1,"four","five");

#出栈
$value=array_pop($a1);
$value=array_pop($a1);
#打印数组
print_r($a1);
echo '<br>';
#打印出栈
echo $value;
echo '<br>';

####队列
#压入队列，在队列头部
array_unshift($a1,"www");
array_unshift($a1,"aaa","bbbb");
print_r($a1);
#弹出 队首数据
$value=array_shift($a1);
$value=array_shift($a1);
echo '<br>';
#打印队首
echo $value;

echo '<br>';
print_r($a1);
#弹出 队中据key=5个数据
unset($a1[5]);
echo '<br>';
print_r($a1);




?>

