<?php
header('Content-type:text/html;charset=utf-8');
if(isset($_COOKIE['username'])&&$_COOKIE['username']){
    exit(' 用户已经登录，不要重复登录');
}

if (isset($_POST['submit'])){
    if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username']==='ye' && $_POST['password']==='123456' ){
        if (setcookie('username',$_POST['username'],time()+3600)){
            header('Location:skip.php?url=index.php&info1=登录成功');

        }
        else{
            echo 'cookie出错';
        }

    }
    header('Location:skip.php?url=index.php&info1=账号密码错误登录失败');

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
    密码:<input type="password" name="password">
    <input type="submit" name="submit">
</form>
</body>
</html>

