<?php

include("login_fail.php");
include("conn.php");
include('register.class.php');

if($_SESSION['priv']!=1 ){
 exit();
}

 if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['a_u_sub'])){
   if(!preg_match('/^[0-9a-zA-Z_]+$/',$_POST['username'])){
   
      echo '用户名只能包含 数字 大小写字母 下划线(_)'.'<br>';
      echo "<a href='register.php'>重新添加</a>";
      exit();
   }
   
   if(empty($_POST['password'])){
      echo '密码不能为空！'.'<br>';
      echo "<a href='register.php'>重新添加</a>";
      exit();	
   }

   $sql="select username from user where username='$_POST[username]' limit 1";
   $query=$conn -> query($sql);
   $row=$query -> fetch_array(); 
   if(isset($row['username'])){
      echo '用户名已存在，请选择其他用户名'.'<br>';
      echo "<a href='register.php'>重新添加</a>";
   }
   
   else {
      $apassword=md5($_POST['password']);
      $remark=htmlentities($_POST['remark']);
      $sql="insert into user (id,username,password,sex,priv,remark,regdate)" .
        " values ('','$_POST[username]','$apassword','$_POST[sex]','$_POST[priv]','$remark',now())";
      $conn -> query("$sql");
     echo "添加用户成功！";
      
      $mysqlaction1='用户:'.$_POST['username'].'||密码:'.$apassword.'||性别:'.$_POST['sex'].'||权限:'.$_POST['priv'].'||备注:'.$remark;
      $sql1="insert into userlog (id,actiondate,actionuser,action,actioninfo)" .
        " values ('',now(),'$_SESSION[username]','添加','$mysqlaction1')";
      $conn -> query("$sql1");
      mysqli_close($conn);
   }

 } 

 else if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['m_u_sub'])){
   $mpassword=md5($_POST['password']);
   $remark=htmlentities($_POST['remark']);

     //验证用户修改内容
     $mysqlaction2='用户:'.$_POST['username'];
     $mysqlinsert="";
        
     $sql3="select * from user where username='$_POST[username]' limit 1";
     $query=$conn -> query($sql3);
     $row=$query -> fetch_array();
      
  
       if(!empty($_POST['password']) && $row['password']!=$_POST['password']){
          $mysqlaction2.='||密码:'.$row['password'].'修改为'.$mpassword;
          $mysqlinsert.=",password='$mpassword'";
          }
 
       if($row['sex']!=$_POST['sex']){
          $mysqlaction2.='||性别:'.$row['sex'].'修改为'.$_POST['sex'];
          $mysqlinsert.=",sex='$_POST[sex]'";
          }
 
       if($row['priv']!=$_POST['priv']){
          $mysqlaction2.='||权限:'.$row['priv'].'修改为'.$_POST['priv'];
          $mysqlinsert.=",priv='$_POST[priv]'";
          } 

       if($row['remark']!=$_POST['remark']){
          $mysqlaction2.='||备注:'.$row['remark'].'修改为'.$_POST['remark'];
          $mysqlinsert.=",remark='$remark'";
          
          } 
   if(!empty($mysqlinsert)){  
     $sql2="insert into userlog (id,actiondate,actionuser,action,actioninfo)" .
        " values ('',now(),'$_SESSION[username]','修改','$mysqlaction2')";
     $conn -> query("$sql2");

     $sql="update user set regdate=now() " . $mysqlinsert . "where username='$_POST[username]'";
     $conn -> query("$sql");
     echo "修改用户成功！";
   
   }
   mysqli_close($conn);
 }

 else {
   $usermod=new reguser();
   echo $usermod;


}
?>
