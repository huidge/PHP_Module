<?php  
session_start();  
header("content-type: image/png");//��ǰ�ļ�����ΪpngͼƬ  
$im = imagecreate(86,22);//��������
$back = imagecolorallocate($im, 245,245,245);
imagefill($im,0,0,$back);  
$scode=0;  
srand((double)microtime()*1000000);  
$font = imagecolorallocate($im, rand(100,255),rand(0,100),rand(100,255));  
$s1=rand(1,9);  
imagestring($im, 5, 12+0*13, 1, $s1, $font);  
$font = imagecolorallocate($im, rand(100,255),rand(0,100),rand(100,255));  
$s2=rand(1,9);  
imagestring($im, 5, 12+1*13, 1, $s2, $font);  
$font = imagecolorallocate($im, rand(100,255),rand(0,100),rand(100,255));  
imagestring($im, 5, 12+2*13, 1, '+', $font);   
$font = imagecolorallocate($im, rand(100,255),rand(0,100),rand(100,255));  
$s3=rand(1,9);  
imagestring($im, 5, 12+3*13, 1, $s3, $font);  
$font = imagecolorallocate($im, rand(100,255),rand(0,100),rand(100,255));  
$s4=rand(1,9);  
imagestring($im, 5, 12+4*13, 1, $s4, $font);  
$font = imagecolorallocate($im, rand(100,255),rand(0,100),rand(100,255));  
imagestring($im, 5, 12+5*13, 1, '=', $font);   
for($i=0;$i<100;$i++){//�����������  
$randcolor = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));  
imagesetpixel($im, rand()%70 , rand()%30 , $randcolor);  
}  
imagepng($im);  
imagedestroy($im);  
$scode=$s1*10+$s2+$s3*10+$s4;  
$_SESSION['scode'] = $scode;
?>  