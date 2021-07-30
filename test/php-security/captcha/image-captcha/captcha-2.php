<?php
require_once __DIR__.'/alpha.php';
header("Content-Type:image/jpeg");
$width=150;
$height=60;



//image frame create
$imagef=imagecreate($width, $height);
#var_dump($imagef);

#layering
$r1=rand(0,255);
$g1=rand(0,255);
$b1=rand(0,255);
#background ::::: 
imagecolorallocate($imagef,$r1,$g1,$b1);

$r2=rand(0,255);
$g2=rand(0,255);
$b2=rand(0,255);
#foreground :::::
$color=imagecolorallocate($imagef,$r2,$g2,$b2);
$r3=rand(0,255);
$g3=rand(0,255);
$b3=rand(0,255);
$linecolor=imagecolorallocate($imagef,$r3,$g3,$b3);
$dir=__DIR__;
$font_file="{$dir}/font14.ttf";

$captcha=get_captcha_text();
session_start();
$_SESSION['captcha']=$captcha;
$lines=5;
for($i=0;$i<$lines;$i++)
{
	$x1=rand(0,$width);
	$x2=rand(0,$width);
	$y1=rand(0,$height);
	$y2=rand(0,$height);
imageline($imagef, $x1, $x2, $y1, $y2, $linecolor);
}
#proccessing of text
#$tb=imagettfbbox(20, 0,$font_file,"ashutosh");
imagettftext($imagef,23,8,30,43,$color,$font_file,$captcha);



#create the image 
imagejpeg($imagef,'captcha.jpeg',100);

# if you are writting the file free memory
#imagedestroy($imagef);

?>