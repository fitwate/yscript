<?php

$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);

$arr2 = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>$arr);
print_r($arr);
echo '<br>';
echo json_encode($arr);
$a1 = json_encode($arr);
echo $a1;
echo '<br>';
echo json_encode($arr2);
echo '<br>';
$arr3=json_decode($a1,true);
echo '<br>';
print_r($arr3);
echo '<br>';
echo $arr3['a'];

#$file_contents = file_get_content('http://localhost/operate.php?act=get_user_list&type=json')

#######
echo $_POST['data'];
echo "\n";
$data = json_decode( $_POST['data'] ,true);
print_r( $data );
echo "\n";
echo $data['test'];

##curl -d 'data={"test":1231231,"test1":222222222222,"test2":{"test22":333333333333}}' 'http://www.test.com/inter.php'

?>
