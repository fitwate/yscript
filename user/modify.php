<?php

include("login_fail.php");
include("conn.php");
include('register.class.php');


if($_SESSION['priv']!=1 ){
 exit();
}

if(isset($_GET['m_username'])&&isset($_GET['m_action'])){

   if($_GET['m_action']=='del'){
	$sql="delete from user where username='$_GET[m_username]'";
        $conn -> query("$sql");
        echo "删除用户成功！";

        $sql2="insert into userlog (id,actiondate,actionuser,action,actioninfo)" .
          " values ('',now(),'$_SESSION[username]','删除','用户名:$_GET[m_username]')";
        $conn -> query("$sql2");
	mysqli_close($conn);
   }

   if($_GET['m_action']=='mod'){
	$sql="select * from user where username='$_GET[m_username]' limit 1";
        $query = $conn -> query($sql);
        $row=$query -> fetch_array();	
	mysqli_close($conn);
		
	$usermod=new reguser($webname='修改用户页面',$username=$row['username'],'',$sex=$row['sex'],$priv=$row['priv'],$remark=$row['remark'],$amsub='m_u_sub');
	echo $usermod;	        
	
	}	
}
else{
echo "错误:未选择任何动作";
}
?>
