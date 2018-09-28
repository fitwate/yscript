<?php
require('../login_fail.php');
?>
<html>
	<head>
		<title> write reade file </title>
	</head>
	<body>
		<table align="center" border="1" width="500">
			<caption><h1>write file</h1></caption>
                        <form action="a3file.php" method="post">
  	                <tr>
			<th>please enter write file name:</th>
			<td> <input type="text" name="wfilename" size=30 value="<?php if(isset($_POST["wfilename"]) )echo $_POST["wfilename"]; ?>" ></td>
			</tr>
               		<tr>
			<th>please enter write file text:</th>
			<td><textarea cols="40" rows="6" name="wfilemess" maxlength="100"> Start Enter ... </textarea></td>
			</tr>
			<tr>
			<th>submit</th>
			<td><input type="submit" name='sub' value="write"></td>
			</tr>
			</form>
		</table>

		<?php
			$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

		#######write file 
		if(isset($_POST["sub"])&&$_POST["sub"]=="write")
		{
			$wfilename=$_POST["wfilename"].'.txt';
			$wfilemess=$_POST["wfilemess"];

			#$fp=@fopen("$DOCUMENT_ROOT/../web/wfile.txt",'ab');
			$fp=@fopen("$DOCUMENT_ROOT/$wfilename",'ab');
			flock($fp,LOCK_EX);
			if (!$fp){
				echo "<center><strong>write error</strong></center>";
				exit;
			}

			flock($fp,LOCK_UN);

			fwrite($fp,$wfilemess,strlen($wfilemess));
			fclose($fp);
			echo '<table align="center" border="1" width="500"><tr>';
			echo "<td><center> write $wfilename ok</center></td>";
			echo '</tr></table>';
		}

		?>


		<table align="center" border="1" width="500">
			<caption><h1>reade file</h1></caption>
                        <form action="a3file.php" method="post">
                	<tr>
			<th>please enter reade file name:</th>
			<td> <input type="text" name="rfilename" size=30 value="<?php if(isset($_POST["wfilename"]) ) echo $_POST["wfilename"]; ?>" ></td>
			</tr>
			<tr>
			<th>submit</th>
			<td><input type="submit" name='sub' value="reade"></td>
			</tr>
			</form>
		</table>

                <?php
                #######reade file 
                if(isset($_POST["sub"])&&$_POST["sub"]=="reade")
                {
                        $rfilename=$_POST["rfilename"].'.txt';

                        #$fp=@fopen("$DOCUMENT_ROOT/../web/wfile.txt",'ab');
                        $rfp=@fopen("$DOCUMENT_ROOT/$rfilename",'rb');
			if (file_exists("$DOCUMENT_ROOT/$rfilename")){
                        if (!$rfp){
                                echo "<center><strong>reade error</strong></center>";
                                exit;
                        }

                        echo '<table align="center" border="1" width="500">';
			echo "<tr><td><center> reade $rfilename ok</center></td></tr>";
			echo "<tr><td>";
			while (!feof($rfp)){
				$mess=fgetss($rfp,999);
				echo strip_tags($mess)."<br>";
			}

                        echo '</td></tr></table>';
			}
			else {
                        echo '<table align="center" border="1" width="500">';
			echo "<tr><td><center> ERROR $rfilename not exist </center></td></tr>";

                        echo '</table>';
			}
                }
                ?>


		<table align="center" border="1" width="500">
			<caption><h1>list file</h1></caption>
                        <form action="a3file.php" method="post">
			</tr>
			<tr>
			<th>submit</th>
			<td><input type="submit" name='sub' value="list"></td>
			</tr>
			</form>
		</table>

		<?php 
		#######list file (.txt)
		if(isset($_POST["sub"])&&$_POST["sub"]=="list")
		{
                        echo '<table align="center" border="1" width="500">';
			echo "<tr><td><center> list  $DOCUMENT_ROOT (*.txt) ok</center></td></tr>";
			echo "<tr><td>";

			echo	nl2br(`ls -lah $DOCUMENT_ROOT | grep '.txt' | awk '{print $9}'`);

                        echo '</td></tr></table>';

		}

		?>


		<table align="center" border="1" width="500">
			<caption><h1>delete file</h1></caption>
                        <form action="a3file.php" method="post">
                	<tr>
			<th>enter del file name(not include .txt):</th>
			<td> <input type="text" name="dfilename" size=30 value="<?php if(isset($_POST["wfilename"]) ) echo $_POST["wfilename"]; ?>" ></td>
			</tr>
			<tr>
			<th>submit</th>
			<td><input type="submit" name='sub' value="del"></td>
			</tr>
			</form>
		</table>

                <?php
                #######delete file (.txt)

                if(isset($_POST["sub"])&&$_POST["sub"]=="del")
                {
                        $dfilename=$_POST["dfilename"].'.txt';
			
                	if (unlink("$DOCUMENT_ROOT/$dfilename")==true)
			{
                        echo '<table align="center" border="1" width="500">';
                        echo "<tr><td><center> delete  $dfilename ok</center></td></tr>";
                        echo '</table>';
			}
			else
			{
                        echo '<table align="center" border="1" width="500">';
                        echo "<tr><td><center> delete  $dfilename failure</center></td></tr>";
                        echo '</table>';
			}
			

                }

                ?>


                <table align="center" border="1" width="500">
                        <caption><h1>size file</h1></caption>
                        <form action="a3file.php" method="post">
                        <tr>
                        <th>enter size file name(not include .txt):</th>
                        <td> <input type="text" name="sfilename" size=30 value="<?php if(isset($_POST["wfilename"]) ) echo $_POST["wfilename"]; ?>" ></td>
                        </tr>
                        <tr>
                        <th>submit</th>
                        <td><input type="submit" name='sub' value="size"></td>
                        </tr>
                        </form>
                </table>

                <?php
                #######delete file (.txt)

                if(isset($_POST["sub"])&&$_POST["sub"]=="size")
                {
                        $sfilename=$_POST["sfilename"].'.txt';
                        $sfp=@fopen("$DOCUMENT_ROOT/$sfilename",'rb');
			$fsize=@filesize("$DOCUMENT_ROOT/$sfilename");
#			$ffsize=nl2br(fread($sfp,filesize("$DOCUMENT_ROOT/$sfilename")));

                        echo '<table align="center" border="1" width="500">';
                        echo "<tr><td><center>   $sfilename size is $fsize  </center></td></tr>";
                        echo '</table>';
                }

                ?>



	</body>

</html>
