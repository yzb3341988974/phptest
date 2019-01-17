<?php

//验证码

/*header('Content-type:image/jpeg');
$width=120;
$height=40;
$s=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$str='';
for ($i=0;$i<4;$i++){
    $str.=$s[rand(0,count($s)-1)];
}
$img=imagecreatetruecolor($width,$height);
$color1=imagecolorallocate($img,rand(100,200),rand(100,200),rand(100,200));
$color2=imagecolorallocate($img,rand(0,130),rand(0,130),rand(0,130));
$color3=imagecolorallocate($img,rand(80,150),rand(80,150),rand(80,150));
$color4=imagecolorallocate($img,rand(30,120),rand(30,120),rand(30,120));
imagefill($img,0,0,$color1);
for ($i=0;$i<100;$i++) {
    imagesetpixel($img, rand(0, $width), rand(0, $height), $color2);
}
for ($i=0;$i<3;$i++) {
    imageline($img, rand(0, 20), rand(0, 40), rand(90, 120), rand(0, 20), $color3);
}
imagettftext($img,15,rand(-5,5),rand(5,30),rand(28,32),$color4,'E:/phpweb/project/phptest1/font/blogs.ttf',$str);//有多种字体
//imagettftext($img,14,rand(-5,5),0,0,$color4,'E:/phpweb/project/phptest1/font/blogs.tff','abcd');
imagejpeg($img);
imagedestroy($img);
*/

/*header('Content-type:image/jpeg');
$width=120;
$height=40;
$s=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$str='';
for ($i=0;$i<4;$i++) {
    $str.=$s[rand(0,count($s))];
}
y
$img=imagecreatetruecolor($width,$height);
$color1=imagecolorallocate($img,rand(0,120),rand(0,120),rand(0,120));
$color2=imagecolorallocate($img,rand(120,240),rand(120,240),rand(120,240));
$color3=imagecolorallocate($img,rand(180,254),rand(180,254),rand(180,254));
$color4=imagecolorallocate($img,rand(50,159),rand(50,159),rand(50,159));
for ($i=0;$i<100;$i++){
    imagesetpixel($img,rand(0,$width),rand(0,$height),$color2);
}
for ($i=0;$i<3;$i++){
    imageline($img,rand(0,($width/3)),rand(0,$height),rand(90,$width),rand(0,$height),$color3);
}
imagettftext($img,15,rand(-5,5),rand(5,20),rand(25,30),$color3,'E:/phpweb/project/phptest1/font/blogs.ttf',$str);
imagefill($img,0,0,$color1);
imagejpeg($img);
imagedestroy($img);
*/

header('Content-type:image/jpeg');
$width=120;
$height=40;
$s=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$str='';
for ($i=0;$i<4;$i++){
    $str.=$s[rand(0,count($s)-1)];
}
$img=imagecreatetruecolor($width,$height);
$color1=imagecolorallocate($img,rand(200,255),rand(200,255),rand(200,255));
$color2=imagecolorallocate($img,rand(120,240),rand(120,240),rand(120,240));
$color3=imagecolorallocate($img,rand(180,254),rand(180,254),rand(180,254));
$color4=imagecolorallocate($img,rand(50,159),rand(50,159),rand(50,159));

for ($i=0;$i<80;$i++){
    imagesetpixel($img,rand(0,$width-1),rand(0,$height-1),$color3);
}
for ($i=0;$i<3;$i++){
    imageline($img,rand(0,30),rand(10,$height-1),rand(80,$width-1),rand(10,$height-1),$color3);
}
imagettftext($img,15,rand(-5,5),rand(0,30),rand(20,30),$color4,'E:/phpweb/project/phptest1/font/blogs.ttf',$str);
imagefill($img,0,0,$color1);
imagejpeg($img);
imagedestroy($img);






