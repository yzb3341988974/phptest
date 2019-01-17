<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/16 0016
 * Time: 下午 1:12
 */

//验证码制作
/*header('Content-type:image/jpeg');
$width=120;
$height=40;
$element=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$str='';
for ($i=0;$i<4;$i++){
    $str.=$element[rand(0,count($element)-1)];
}
$img=imagecreatetruecolor($width,$height);
$colorBg=imagecolorallocate($img,rand(190,255),rand(190,255),rand(190,255));
$colorBorder=imagecolorallocate($img,rand(190,255),rand(190,255),rand(190,255));
$colorX=imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
$colorY=imagecolorallocate($img,rand(80,150),rand(80,150),rand(80,150));
imagefill($img,0,0,$colorBg);
imagerectangle($img,0,0,$width-1,$height-1,$colorBorder);//绘制矩形
for ($i=0;$i<80;$i++) {
    imagesetpixel($img, rand(0, $width - 1), rand(0, $height - 1), $colorX);//画单一像素
}
for($i=0;$i<3;$i++) {
    imageline($img, rand(0, $width / 4), rand(0, $height), rand($width / 2, $width), rand(0, $height), $colorX);//画一条线段
}
//imagestring($img,5,50,15,'abcd',$colorx);//写字符串
imagettftext($img,15,rand(-5,5),rand(5,30),rand(28,32),$colorY,'E:/phpweb/project/phptest1/font/blogs.ttf',$str);//有多种字体
imagejpeg($img);

imagedestroy($img);*/





header('Content-type:image/jpeg');
$element=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$str='';
for ($i=0;$i<4;$i++){
    $str.=$element[rand(0,count($element))];
}
$width=120;
$height=40;
$img=imagecreatetruecolor($width,$height);
$colorBg=imagecolorallocate($img,rand(190,255),rand(190,255),rand(190,255));
$colorBorder=imagecolorallocate($img,rand(190,255),rand(190,255),rand(190,255));
$colorX=imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
$colorY=imagecolorallocate($img,rand(80,150),rand(80,150),rand(80,150));
imagefill($img,0,0,$colorBg);
imagerectangle($img,0,0,$width-1,$height-1,$colorBorder);
for ($i=0;$i<80;$i++){
    imagesetpixel($img,rand(0,$width-1),rand(0,$height-1),$colorX);
}
for ($i=0;$i<3;$i++){
    imageline($img, rand(0, $width / 4), rand(0, $height), rand($width / 2, $width), rand(0, $height), $colorX);//画一条线段
}
imagettftext($img,15,rand(-5,5),rand(5,30),rand(28,32),$colorY,'E:/phpweb/project/phptest1/font/blogs.ttf',$str);//有多种字体
imagejpeg($img);
imagedestroy($img);


