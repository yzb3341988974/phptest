<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 下午 3:05
 */
session_start();
header('Content-type:text/html ;charset=utf-8');
   if (isset($_SESSION['username']) && $_SESSION['username']==='ye'){
       session_unset();
       session_destroy();
       setcookie(session_name(),'',time()-3600,'/');
       header('Location:skip.php?url=index.php&info=注销成功');
   }
   else{
        header('Location:skip.php?url=index.php&info=注销失败');
    }


