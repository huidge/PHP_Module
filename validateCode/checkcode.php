<?php
session_start();
$length = 4;
$str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
for($i = 0; $i < $length; $i ++) {
$return = $str{mt_rand ( 0, 61 )}; //生成php随机数
$returnStr.=$return;
$show_str.=($return." ");
}
$_SESSION['check'] = $returnStr;
$_SESSION['show'] = $show_str;
$img = imagecreate(80,20);
$color = imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));//给这个画布着色
$white = imagecolorallocate($img,rand(0,50),rand(0,50),rand(0,50));
for($i=0;$i<50;$i++){
$randcolor=imagecolorallocate($img,rand(100,255),rand(100,255),rand(100,255));
imagesetpixel($img,rand(0,80),rand(0,20),$randcolor);//验证码背景呈点状
}
imagestring($img,5,10,0,$_SESSION['show'],$white);
imagegif($img);
?>