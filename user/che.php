<?php
  session_start();
  $rand="";
   for($i=0;$i<4;$i++){
      $rand .= dechex(rand(1,15));
   }
 
 
  $_SESSION['check_pic']=$rand;

  //设置图片大小
  $im = imagecreatetruecolor(100,30);

  //设置颜色
  $bg = imagecolorallocate($im,0,0,0);
  $te = imagecolorallocate($im,255,rand(0,255),rand(0,255));
  $te1 = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
  $te2 = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));

  //画线
  for($i=0;$i<3;$i++){
  imageline($im,0,rand(0,20),100,rand(10,30),$te1);
  imageline($im,rand(0,60),0,rand(51,100),30,$te1);
  }
  //画点
  for($i=0;$i<200;$i++){
  imagesetpixel($im,rand()%100,rand()%30,$te2);
  }

  //把字符串写在图像左上角
  imagestring($im,rand(1,6),rand(3,60),rand(0,15),$rand,$te);

  //输出图像
  //指定图像格式
  header("Content-type:image/jpeg");
  imagejpeg($im);


?>
