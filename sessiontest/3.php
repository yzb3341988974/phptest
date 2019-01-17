<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 下午 1:16
 */
//销毁session

session_start();//打开一个会话
session_unset();//释放内存
session_destroy();//摧毁一个会话中的全部数据
setcookie(session_name(),'',time()-3600,'/');//销毁客户端卡号;