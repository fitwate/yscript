<?php
require('../login_fail.php');
/*

str_replace(被替换值，替换值，被替换内容)

*/
function htmtocode($content){
	$content = str_replace("\n","<br>",str_replace(" ","&nbsp;",$content));
	
	return $content;
}
$content="ceshi          dcess
     iiiii lllll ";
echo $content;
echo "<br>";
echo "<br>";
echo "<br>";

echo htmtocode($content);
echo '<br>';
echo substr_replace($content,'x',-1);
#######
$stra='abcdefghijklmn';
echo '<br>';
echo $stra;
echo '<br>';
echo substr($stra,1);
echo '<br>';
echo substr($stra,-1);
echo '<br>';
echo substr($stra,0,4);
echo '<br>';
echo substr($stra,2,-1);
echo '<br>';
echo strlen($stra);
echo '<br>';

#
#zifuchuan weizhi
echo strpos($stra,'c');
echo '<br>';

#
echo substr_replace($stra,'x',2);
echo '<br>';
echo substr_replace("$stra",'x',2,0);
echo '<br>';
echo substr_replace($stra,'x',2,2);
echo '<br>';
echo substr_replace($stra,'x',2,-2);
echo '<br>';
echo substr_replace($stra,'x',2,-3);

echo '<br>';
echo '<br>';

?>
