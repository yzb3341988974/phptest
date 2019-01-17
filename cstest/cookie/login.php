<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 下午 1:53
 */
header('Content-type:text/html;charset=utf-8');
if (isset($_COOKIE['username'])  && $_COOKIE['username']==='ye'){
    exit('你已经登录不要重复登录');
}
if(isset($_POST['submit'])){
    if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username']==='ye' && $_POST['password']==='123456' ){
         if (setcookie('username',$_POST['username'],time()+3600)){
             header('Location:skip.php?url=index.php&info=恭喜你登录成功');
         }
         else{
             echo 'cookie设置失败';
         }
    }else{
        header('Location:skip.php?url=index.php&info=登录失败，请重新登录');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>登录</title>
</head>
<body>
<form method="post" action="login.php">
    姓名:<input type="text" name="username">
    密码：<input type="password" name="password">
    <input type="submit"  name="submit" value="登录">
</form>
</body>
</html>