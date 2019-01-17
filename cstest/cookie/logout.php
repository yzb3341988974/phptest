<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 下午 3:05
 */
header('Content-type:text/html ;charset=utf-8');
if (isset($_COOKIE['username']) && $_COOKIE['username']==='ye'){
    if (setcookie('username',$_POST['username'],time()-3600)){
       header('Location:skip.php?url=index.php&info=注销成功');
    }
    else{
        header('Location:skip.php?url=index.php&info=注销失败');
    }

}
else{
    echo '没有此用户';
}