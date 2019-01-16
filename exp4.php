<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/16 0016
 * Time: 下午 3:06
 */
//水印
header('Content-type:image/jpeg');


$image=imagecreatefromjpeg('image/yanhua.jpg');
$image2=imagecreatefromjpeg('image/logo.JPG');
$colorX=imagecolorallocate($image,255,255,255);
$imageWidth=imagesx($image);//获取图像宽度：800
$imageHeight=imagesy($image);//获取图像高度: 221
$logoWidth=imagesx($image2);
$logoHeight=imagesy($image2);
$arr=imagettfbbox(20,0,'E:/phpweb/project/phptest1/font/chinese.ttf','烟花易冷');//获取字符宽度
$strWidth=$arr[2]-$arr[0];//imagettfbbox返回的是数组
imagettftext($image,20,0,$imageWidth-$strWidth-1,$imageHeight-10,$colorX,'E:/phpweb/project/phptest1/font/chinese.ttf','烟花易冷');//有多种字体


//imagecopy($image,$image2,220,80,0,0,$logoWidth,$logoHeight);
/*
 * 参数说明
 * $image:目标图片
 * $image2:logo图片
 * 220:copy到目标图片的x轴位置
 * 80：copy到目标图片的y轴位置
 * 0：logo图片的x轴0位置开始copy
 * 0：logo图片的y轴0位置开始copy
 * $logoWidth:copy logo图片的宽度
 * $logoHeight:copy logo图片的高度*/

//加上不透明度
imagecopymerge($image,$image2,220,80,0,0,$logoWidth,$logoHeight,40);
//数值越小越透明
imagejpeg($image);
imagedestroy($image);