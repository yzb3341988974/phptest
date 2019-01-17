<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 下午 2:40
 */
if (!isset($_GET['url'])){
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>登录</title>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="3;URL=<?PHP echo $_GET['url']?>">
    <title>正在跳转</title>
</head>
<body>
<div style="text-align: center;font-size: 20px;"><?php echo $_GET['info']?>,3秒后跳转</div>
</body>
</html>
