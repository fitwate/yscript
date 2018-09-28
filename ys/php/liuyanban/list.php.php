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

echo '<tr bgcolor="#eff3ff">';
echo '<td>标题:';echo "$row[title]";echo '用户:';echo "$row[user]";echo '</td>';
echo '</tr>';

echo '<tr bgcolor="#ffffff">';
echo '<td>内容:';echo "$row[content]";echo ' date:';echo "$row[lastdate]"; echo '</td>';
echo '</tr>';
}
?>

</table>

</html>
