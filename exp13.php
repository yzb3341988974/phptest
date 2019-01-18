<?php
header('Content-type:text/html;charset=utf-8');
//与mysql数据库建立连接
$link=@mysqli_connect('localhost','root','1998815wetyjkxg');


//连接时的错误提示
if (mysqli_connect_errno()){//如果出现错误
    exit(mysqli_connect_error());//用字符串形式输出错误
}

//设置字符集
mysqli_set_charset($link,'utf8');//写utf8

//选择数据库
mysqli_select_db($link,'d2');

//关闭与数据库连接
mysqli_close($link);
