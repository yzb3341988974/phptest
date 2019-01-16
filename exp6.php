<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/16 0016
 * Time: 下午 4:45
 */
//imagecopyresampled();把图片的一部分复制到另一个图片
header('Content-type:image/jpeg');
$img=imagecreatefromjpeg('image/1.jpg');
$img1=imagecreatetruecolor(500,500);

imagecopyresampled($img1,$img,100,100,300,300,200,200,200,200);
/*参数说明
1：目标图像资源
2：源图像资源
3：
4:3,4两个参数确定了一个坐标，把采样的图片放到目标图片的哪个位置
5：
6:5,6两个参数确认你要采样的源图片的某个部分的起始坐标
7：
8:7,8两个参数确定了放到目标图片上的尺寸
9：
10:9,10两个坐标确认截取源图片的尺寸
 * */
//imagejpeg($img);
imagejpeg($img1);
imagedestroy($img1);
imagedestroy($img);