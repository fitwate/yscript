<html>
	<head>
	<title>发布列表</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
<?php 

include("conn.php");


?>

<table width=500 border="0" align="center" cellpadding="5" bgcolor="#add3ef">
<?php
	$sql="select * from message order by id desc";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query)){
?>

<tr bgcolor="#eff3ff">
<td>标题:<?php  echo "$row[title]" ?>用户:<?php  echo "$row[user]" ?></td>
</tr>
<tr bgcolor="#ffffff">
<td>内容:<?php echo "$row[content]" ?> date:<?php echo "$row[lastdate]" ?></td>
</tr>

<?php
}
?>

</table>

</html>
