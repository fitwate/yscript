<html>
	<head>
		<title> PHP实现简单计算器</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>
<?php 
require('../login_fail.php');
	$num1=true;
	$num2=true;

	$numa=true;
	$numb=true;
	
	$message1="";
	$message2="";

	if(isset($_GET["sub"])){

		if($_GET["num1"]==""){
			$num1=false;
			$message1="第一个值不能为空";
		}
		else if(!is_numeric($_GET["num1"])){
			$numa=false;
			$message1.="第一个值不是数字";
		}
		if($_GET["num2"]==""){
			$num2=false;
			$message2="第二个值不能为空";
		}
		else if(!is_numeric($_GET["num2"])){
			$numb=false;
			$message2.="第二个值不是数字";
		}
		if($num1 && $num2 && $numa && $numb){

			$sum=0;
			switch($_GET["ysf"]){
				case "+":
					$sum=$_GET["num1"]+$_GET["num2"];
					break;
				case "-":
					$sum=$_GET["num1"]-$_GET["num2"];
					break;
				case "x":
					$sum=$_GET["num1"]*$_GET["num2"];
					break;
				case "/":
					$sum=$_GET["num1"]/$_GET["num2"];
					break;
				case "%":
					$sum=$_GET["num1"]%$_GET["num2"];
				break;
			}
		}
}

?>
	<body>

		<table align="center" border="1" width="500">

			<caption><h1>计算器</h1></caption>
			<form action="a1jsq.php">
		<tr>
			<td>
				<input type="text" size="5" name="num1" value="<?php if(isset($_GET["num1"])) echo $_GET["num1"]; ?>">
			</td>
			<td>
				<select name="ysf">
					<option value="+" <?php if(isset($_GET["ysf"])&&$_GET["ysf"]=="+") echo "selected"; ?> >+</option>
					<option value="-" <?php if(isset($_GET["ysf"])&&$_GET["ysf"]=="-") echo "selected"; ?> >-</option>
					<option value="x" <?php echo isset($_GET["ysf"])&&$_GET["ysf"]=="x"?"selected":"" ?> >x</option>
					<option value="/" <?php echo isset($_GET["ysf"])&&$_GET["ysf"]=="/"?"selected":"" ?> >/</option>
					<option value="%" <?php echo isset($_GET["ysf"])&&$_GET["ysf"]=="%"?"selected":"" ?> >%</option>
				</select>
			</td>
			<td>
				<input type="text" size="5" name="num2" value="<?php if(isset($_GET["num2"])) echo $_GET["num2"]; ?>">
			</td>
			<td>
				<input type="submit" name="sub" value="计算">
			</td>
		</tr>

		<?php 
			if(isset($_GET["sub"])){
				echo '<tr><td colspan="5">';
                                if($num1 && $num2 && $numa && $numb){
					echo  "结果:".$_GET["num1"]." " .$_GET["ysf"]." ".$_GET["num2"]."=".$sum;
				}else{
					echo $message1."<br>".$message2;
				}
				echo '</td></tr>';
			}
		?>

		<form>
		</table>
	</body>	
</html>
