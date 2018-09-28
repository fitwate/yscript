<?php

require('../login_fail.php');
$ys=1;
$ys+=1;
echo $ys;
echo "<br>";
echo 1 || 0;
echo "<br>";
$ysy=$ys++;
echo $ysy;
echo "<br>";
$ysys=++$ys;
echo $ysys;
echo "<br>";

echo "<br>";

$a=19;
$b=$a%10;
echo $b;
echo "<br>";
$c= $a>$b ? $a:$b;
echo $c;
echo "<br>";

#
$a1=9;
if($a1<10 || --$a1>3)
{
echo 'a1_ok';
}
echo "<br>";
echo $a1;
echo "<br>";

$b1=9;
if($b1<10 | --$b1>3)
{
echo 'b1_ok';
}
echo "<br>";
echo $b1;
echo "<br>";

# && and &
?>
