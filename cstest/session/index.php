<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 下午 2:06
 */
session_start();
header('Content-type:text/html;charset=utf-8');
if (isset($_SESSION['username']) && $_SESSION['username']==='ye'){
    echo "{$_SESSION['username']}您好";
    echo "<a href='logout.php'>注销</a>";

}
else{
echo "<a href='login.php'>请登录</a>";
}
?>