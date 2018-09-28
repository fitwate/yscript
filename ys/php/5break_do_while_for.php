<?php
require('../login_fail.php');
echo "break  do while for <br>";

$bbb=10;
do {
$bbb++;
echo "$bbb <br>";
}
while($bbb<10);

$ccc=10;
while($ccc<10)
{
$ccc++;
echo "$ccc <br>";
}

for($ddd=1;$ddd<=20;$ddd++)
{
echo "$ddd <br>";
}



?>
