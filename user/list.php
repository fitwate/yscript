<html>
	<head>
	<title>用户列表</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
<?php 

include("login_fail.php");
include("conn.php");

 if($_SESSION['priv']!=1 ){
 exit();
 }
 
?>

<table width=900 border="0" align="center" cellpadding="5" bgcolor="#add3ef">

<tr bgcolor="#aff3fa">
	<td>用户名</td>
	<td>密码</td>
	<td>性别</td>
	<td>权限</td> 
	<td>修改日期</td>
	<td>备注</td>
</tr>

<?php
	$sql="select * from user order by id desc";
	$query=$conn -> query($sql);
	mysqli_close($conn);
	while($row=$query -> fetch_array()){
?>

<tr bgcolor="#eff3ff">
	<td><?php  echo "$row[username]" ?></td>
	<td><?php  echo "$row[password]" ?> </td>
	<td><?php  switch($row['sex']){case 0: echo '男';break;case 1: echo '女';break;default:echo'保密';} ?> </td>
	<td><?php  switch($row['priv']){case 0: echo '未选择';break;case 1: echo '管理员';break;default:echo'普通用户';} ?> </td>
	<td><?php  echo "$row[regdate]" ?></td>
	<td><?php  echo "$row[remark]" ?></td>
	<td><a href="modify.php?<?php echo "m_username=$row[username]" ?>&m_action=mod">修改</a></td>
	<td><a href="modify.php?<?php echo "m_username=$row[username]" ?>&m_action=del">删除</a></td>
</tr>
<?php
}
?>

</table>

</html>
