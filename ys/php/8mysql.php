<?php
require('../login_fail.php');
$conn = @mysql_connect("localhost","ysu","ysp") or die ("conn error");

mysql_select_db("ysceshi",$conn) or die ("db error");

#
$sql="select * from test";

mysql_query("set names 'UTF8'");
$result = @mysql_query($sql,$conn) or die(mysql_error());

/* 计数 */
echo "<br>";
$num = mysql_num_rows($result);

echo $num;

if ($num > 20 )
{$sql="delete from test where id > 10";
mysql_query($sql,$conn) or die(mysql_error());
};

echo "<br>";
$row=mysql_fetch_row($result);

print_r($row);
echo "<br>";
echo $row[2];

$array=mysql_fetch_array($result);
echo "<br>";
print_r($array);
echo "<br>";
echo "$array[regdate]";
echo "<br>";
echo $array[2];
echo "<br>";



while($array=mysql_fetch_array($result)){
echo "$array[regdate]"."<br><hr>";

}

#
$sqlin="INSERT INTO test (id,uid,regdate,remark)values('','ys',now(),'xuesheng')";
mysql_query($sqlin,$conn);


echo mysql_insert_id($conn);
/*
mysql_insert_id 传回最后一次使用INSERT 指令的ID

mysql_tablename 取得数据库名称

mysql_error 返回错误信息

mysql_close 关闭Mysql链接
*/
?>
