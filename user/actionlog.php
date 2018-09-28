<html>
	<head>
	<title>操作日志</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>

        <body>
<?php 

include("login_fail.php");
include("conn.php");


 if($_SESSION['priv']!=1 ){
 exit();
 }
 
?>

<!--日志查询 -->
               <table border="1" width="900" align="center" bgcolor="#aff3fa">
                <form name="frm" action=""  method="post" title="这是表单">
                        <caption>查询日志</caption>

                        <tr>
                                 <th width="90">操作者</th>
                                <td>
                                        <input type="text" name="actionuser" size="20" maxlength="20" 
                                        value=<?php echo isset($_POST['actionuser'])?"$_POST[actionuser]":""; ?> >
                                </td>
                                <th >操作类型</th>
                                <td>
                                        <input type="radio" name="action" value="" checked > 全部
                                        <input type="radio" name="action" value="添加" 
                                        <?php echo  isset($_POST['action'])&&$_POST['action']=='添加'?'checked':""; ?> > 添加
                                        <input type="radio" name="action" value="修改" 
                                        <?php echo   isset($_POST['action'])&&$_POST['action']=='修改'?'checked':""; ?> > 修改
                                        <input type="radio" name="action" value="删除" 
                                        <?php echo   isset($_POST['action'])&&$_POST['action']=='删除'?'checked':""; ?>  > 删除
                                        <input type="radio" name="action" value="会话" 
                                        <?php echo   isset($_POST['action'])&&$_POST['action']=='会话'?'checked':""; ?>  > 会话
                                </td>
                        </tr>
			<tr>        
				<th width="90">操作日期</th>
                                <td colspan='2' >
                                         <b>Start: </b><input type="text"  name="actionstart" size="19" maxlength="19" value=
                                         "<?php echo isset($_POST['actionstart'])?"$_POST[actionstart]":date("Y-m-d H:i:s",strtotime("-1 day")); ?>" >
                                </td>
                                <td >
                                         <b>End: </b><input type="text" name="actionend" size="19" maxlength="19"  value=
                                         "<?php echo isset($_POST['actionend'])?"$_POST[actionend]":date("Y-m-d H:i:s",strtotime("+1 day")); ?>" >
                                </td>
                        </tr>
			<tr>        
				<th width="90">操作内容</th>
                                <td colspan='3' >
                                        <textarea cols="70" rows="1" name="actioninfo" maxlength="100"><?php echo isset($_POST['actioninfo'])?"$_POST[actioninfo]":""; ?></textarea>
                                </td>
                        </tr>
			<tr>        
				<th width="90">选择分页</th>
                                <td colspan='3' >
				选择第
				<select name="page">
						
						<?php  if(isset($_SESSION['pagenum'])){
							$pagenav="";
							for ($i = 1; $i <= $_SESSION['pagenum']; $i++) {
								if (isset($_POST['page'])&&($i == $_POST['page'])){
								$pagenav .= "<option value='$i' selected>$i</option>\n";
								}
								else{
								$pagenav .= "<option value='$i'>$i</option>\n";
								}
								}	
							echo $pagenav;	
						} 
						else {
							echo '<option value="0" selected >0</option>';
							}
						?>
                                        </select>
				页，共
                                       <input type="text" name="pagenum" size="4" maxlength="4" 
                                        value=<?php echo isset($_SESSION['pagenum'])?"$_SESSION[pagenum]":"0"; ?> readonly >页
					
					<?php
					if(isset($_POST['page'])&&isset($_SESSION['pagenum']) && isset($_POST['pagenum'])){
   					if($_POST['page']==0 || $_SESSION['pagenum'] !=$_POST['pagenum']){
  						 echo "<font color='red'>请选择具体选择分页，再查询!!!</font>"."<br>";
   						}
					}
					 
					//if(!isset($_POST['page'])){
					//	 echo "<script>document.frm.submit() </script>";	
					//}
					?>
                                </td>
                        </tr>
                        <tr>
                                <td colspan="4" align="center">
                                        <input type="submit" name='log_query' value="查询">
                                        <input type="reset">
                                </td>
                        </tr>
                </form>
                </table>
                <br>
                <br>


<!--生成日志列表 -->
<?php
if(isset($_POST['log_query'])){
  $mysqlwhere="where id like '%'";
   
   if(!empty($_POST['actionuser'])){
      $mysqlwhere.="and actionuser=" . "'$_POST[actionuser]'";
   }
    
   if(!empty($_POST['action'])){
      $mysqlwhere.="and action=" . "'$_POST[action]'";
   }

   
   if(!empty($_POST['actioninfo'])){
      $mysqlwhere.="and actioninfo like "."'%$_POST[actioninfo]%'";
   }
   
   if(!empty($_POST['actionstart'])&&!empty($_POST['actionend'])){
      if($_POST['actionstart'] == date('Y-m-d H:i:s',strtotime($_POST['actionstart'])) && $_POST['actionend'] == date('Y-m-d H:i:s',strtotime($_POST['actionend']))){
         $mysqlwhere.="and actiondate >= "."'$_POST[actionstart]'";
         $mysqlwhere.="and actiondate <= "."'$_POST[actionend]'";
      }
      else{
      echo "<center><font color='red'>操作日期输入错误,已忽略日期条件!!!</font></center>"."<br>";
      }
   }


   
   

?>
 <table width=900 border="0" align="center" cellpadding="5" bgcolor="#add3ef">


<!--分页 -->
<?php
   $pagesize=10;
   $page=0;

   $numq=$conn -> query("select * from userlog   $mysqlwhere");
   $num = mysqli_num_rows($numq);


   if($num>$pagesize){
   $_SESSION['pagenum']=intval($num/$pagesize);
   
      if($num%$pagesize!=0){
         $_SESSION['pagenum']=$_SESSION['pagenum']+1;
      }
   }
   else{
   $_SESSION['pagenum']=1;
   }

   if($_SESSION['pagenum'] !=$_POST['pagenum']){
   //提交刷新
   echo "<script>document.frm.submit() </script>";
   echo "<center><font color='red'>请选择具体选择分页，再查询!!!</font></center>"."<br>";
   }
   else if(isset($_POST['page'])){
     $page=($_POST['page']-1)*$pagesize;
   }
?>

 <tr bgcolor="#aff3fa">
	<td width="90">操作日期</td>
	<td width="70">操作者</td>
	<td width="70">类型</td>
	<td>操作内容</td> 
 </tr>

 <?php
	$sql="select * from userlog " . $mysqlwhere . " order by id desc"." limit ".$page.',' . $pagesize;
	$query=$conn -> query($sql);
	mysqli_close($conn);
	while($row=$query -> fetch_array()){
 ?>

 <tr bgcolor="#eff3ff">
	<td><?php  echo "$row[actiondate]" ?></td>
	<td><?php  echo "$row[actionuser]" ?> </td>
	<td><?php  echo "$row[action]" ?></td>
	<td><?php  echo "$row[actioninfo]" ?></td>
 </tr>
 <?php
 }
 ?>

<?php
}
?>

</table>
</body>
</html>
