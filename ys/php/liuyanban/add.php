<html>
	<head>
	<title>发布页面</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
<?php

include("conn.php");

if(isset($_POST['user'])&&$_POST['user']){

$sql="insert into message (id,user,title,content,lastdate)" .
	" values ('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
mysql_query("$sql");
echo "发布成功！";
}
?>
<!-- copy
<SCRIPT language=javascript>
function CheckPost()
{
	if (myform.user.value=="")
	{
		alert("请填写用户名");
		myform.user.focus();
		return false;
	}
	if (myform.title.value.length<5)
	{
		alert("标题不能少于5个字符");
		myform.title.focus();
		return false;
	}
	if (myform.content.value=="")
	{
		alert("必须要填写留言内容");
		myform.content.focus();
		return false;
	}
}
</SCRIPT>
-->
<SCRIPT language=javascript>
function CheckPost()
{
	if (myform.user.value=="")
	{
		alert("please fill out user");
		myform.user.focus();
		return false;
	
	}
}
</SCRIPT>
<form action="add.php" method="post" name="myform" onsubmit="return CheckPost();">
用户:
<input type="text" size="10" name="user" /><br>
标题:
<input type="text" name="title" /><br>
内容:
<textarea name="content"></textarea><br>


<input type="submit" name="submit" value="发布留言" />


</form>

</html>
