<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 下午 12:12
 *
 * cookie
 */
header('Content-type:text/html;charset=utf-8');
//var_dump(setcookie('name','叶',time()+3600));//1.cookie名字，2.名字的值,3.cookie持续时间
//数组
//设置cookie
//var_dump(setcookie('member[name]','叶',time()+3600));//1.cookie名字，2.名字的值,3.cookie持续时间
//var_dump(setcookie('member[email]','1198383844@qq.com',time()+3600));//1.cookie名字，2.名字的值,3.cookie持续时间
//删除cookie数据
var_dump(setcookie('member[name]','叶',time()-3600));//1.cookie名字，2.名字的值,3.cookie持续时间
var_dump(setcookie('member[email]','叶',time()-3600));//1.cookie名字，2.名字的值,3.cookie持续时间


