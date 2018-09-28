<?php

require('../login_fail.php');
/*
ysceshi = 9
Error
*/
/*
A-Z a-z _
*/
#######
$ysceshi = 9;
echo $ysceshi;
#var_dump and getType
echo '<pre>';
var_dump($ysceshi);
echo '</pre>';
#
 $ysceshi="abcdefg121";

echo '<pre>';
var_dump($ysceshi);
echo '</pre>';
$ysceshi=1.222;
setType($ysceshi,'int');
var_dump($ysceshi);

$ysceshi="123.0012";
$a=(int)$ysceshi;
echo '<br>';
echo $a;
#######
#isset and unset  empty
echo '<br>';
if(isset($ysceshi)){
   echo 'bian liang exit';
}else {
   echo 'bian liang not exit';
}

unset($ysceshi);
echo '<br>';
if(isset($ysceshi)){
   echo 'bian liang exit';
}else {
   echo 'bian liang not exit';
}
#######
echo '<br>';
$one='two';
$two='three';
echo $$one;

#######
echo '<br>';
$one=100;
$two=$one;
echo '<br>';
echo $two;
$one=200;
echo '<br>';
echo $two;


#
$two=&$one;
$one=300;
echo '<br>';
echo $two;

#######
echo '<pre>';
print_r($_ENV);
echo '</pre>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';


echo '<pre>';
print_r($GLOBALS);
echo '</pre>';

#######
$int=10; // 10 jin zhi
$int=045; // 8 jinzhi ,0 start
$int=0xff; //16 jinzhi,0x start

$float=10;
$float=-10;
$float=3.14E5;  //3.14x10^5
$float=3.14E+2; //3.14x10^5
$float=3.14e-2; //3.14x10^-5
#######
#false
$bool=false;
$bool=0;
$bool=0.000;
$bool="";
$bool=" ";
$bool=null;
$bool="0";
$bool=array();
#######
$str1='$float';
$str2="$float";
echo $str1;
echo '<br>';
echo $str2;
echo '<br>';
echo "$str2 \"";
#
$str=<<<hello
<br>
231
123
1231
ceshi
shi
test

<br>
hello;

echo $str;
#
/*
is_bool();
is_string();
is_float(),is_double() is_real()
is_array()
is_object()
is_resource()
is_null();

is_scalar();
is_numberic();
is_callable();
*/
define("HOME","aaaaaaaaaaaaaaaaaaaaaaa");
$A=100;

function demo()
{	
#	global $a;
	echo '$a';
	echo HOME;
}
demo();
#define (int,float,bool,string);
if(defined("HOME"))
{
	echo HOME;
}
else
{
	define("HOME","BBBBBBBBBBBBBBBBBB");
}
echo HOME;
echo '<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';
echo __FUNCTION__.'<br>';
echo PHP_VERSION.'<br>';
echo M_PI;
?>
