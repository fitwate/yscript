<?php

require('../login_fail.php');
/*一维数组*/
$arr=array("id"=>2,"title"=>6);
echo "$arr[title]";

echo "<br>";

$arra=array(3,5,6,7);
print_r($arra);
echo "<br>";
echo $arra[0];

echo "<br>";

/*二维数组*/
$arraa=array(array(3,6),array(2,4));
print_r($arraa);
echo "<br>";
echo $arraa[0]{1};
echo "<br>";
echo $arraa[1]{1};

echo "<br>";
/* */
$arrys[][]='aaa';
$arrys[][]='aab';
$arrys[][]='aac';
$arrys[][]='aad';
$arrys[][]='aae';
$arrys[][]='aaf';
$arrys[10][]='aaa';
$arrys[10][]='aaa';
$arrys[][]='aaa';
$arrys[][]='aaa';
$arrys[][]='aaa';
echo '<pre>';
print_r ($arrys);
echo '</pre>';
/*数组赋值*/
$arrb=array(2,4,6,8);
print_r($arrb);
echo "<br>";
$arrb[0]="php100";
echo "<br>";
print_r($arrb);
echo "<br>";
echo $arrb[0];

/*数组函数*/
echo "<br>";
echo count($arrb);
echo "<br>";
if(is_array($arrb)){
	echo "is array";
}
else {

	echo "Not array";
}

/* explode */
$bbb="1982-1984-1986";
$arrc=explode("-",$bbb);
echo "<br>";
print_r($arrc);

/* foreach */

$arrd=array(1980,1982,1984,1986);
echo "<br>";
echo "<br>";
print_r($arrd);
echo "<br>";
echo $arrd[0],$arrd[1],$arrd[2];
echo "<br>";
foreach($arrd as $key=>$value){
echo $key;
echo "---";
echo $value;
echo "<br>";
}
echo "<br>";
foreach($arrd as $value){
echo $value;
echo "<br>";
}

#
$ipv='192.168.10.1';
$iparr=explode(".",$ipv);
list($ipa,$ipb,$ipc,$ipd)=$iparr;
echo $ipa.'<br>';
echo $ipb.'<br>';
echo $ipc.'<br>';
echo $ipd.'<br>';

echo '############################################################'.'<br>';
$ipe=each($iparr);
print_r ($ipe);
echo "<br>";
$ipe=each($iparr);
print_r ($ipe);
echo "<br>";
$ipe=each($iparr);
print_r ($ipe);
echo "<br>";
$ipe=each($iparr);
print_r ($ipe);
reset($iparr);

echo "<br>";
while(list($value,$key)=each($iparr)){
echo '----value---'.$value.'-----key---'.$key.'<br>';

echo 'ENV';
echo '<pre>';
print_r($_ENV);
echo '</pre>';

echo 'SERVER';
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

echo 'GLOBALS';
echo '<pre>';
print_r($GLOBALS);
echo '</pre>';
}





?>
