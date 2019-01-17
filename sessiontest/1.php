<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 下午 1:01
 */
//1.开启一个会话:办会员卡
//2.打开已经存在的会话：根据会员卡买东西
session_start();//开启一个会话,别的页面访问要打开已经存在的会话
$_SESSION['name']='叶';
$_SESSION['email']='1198383844@qq.com';
//创建