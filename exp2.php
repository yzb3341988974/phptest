<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/16 0016
 * Time: 上午 11:58
 */
//图像处理
//创建图像
//绘制图像
//输出图像：可以输出显示也可以保存到服务器

//header()  在该函数之前不能输出任何内容
//释放资源

header('Content-type:image/jpeg');//之前不能输出任何内容，默认情况是header('Content-type:text/html);
//header('Content-type:text/html');
//1--------------创建图像


$img=imagecreatetruecolor(200,200);//新建一个长和高为200像素的真彩色图像

//2-------------绘制图像
$color1=imagecolorallocate($img,50,50,50);//分配颜色
$color2=imagecolorallocate($img,229,36,36);//分配颜色

imagefill($img,0,0,$color2);//区域填充

//--------------生成图像


imagejpeg($img);
/*if(imagejpeg($img,'1.jpeg')) {//此时header中要输出html，因为没有输出图像
echo '保存成功';


}
else {
    echo '保存失败';
}*/
//---------------------释放资源

imagedestroy($img);
