<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 上午 11:21
 */
//文件的下载
$file='image/1.jpg';
$fileinfo=finfo_open(FILEINFO_MIME_TYPE);
    $minetype=finfo_file($fileinfo,$file);
finfo_close($fileinfo);//判断文件的mine类型


//发送指定的文件MINE类型的头信息
header('Content-type:'.$minetype);
//指定下载文件的描述
header('Content-Disposition:attachement;filename='.basename($file));
//指定文件的大小
header('Content-type: '.filesize($file));
//读取文件内容至缓冲区，返回这个文件
readfile($file);
