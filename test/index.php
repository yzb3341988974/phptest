<?php
header('Content-type:text/html');
if (isset($_COOKIE['username'])&& $_COOKIE['username']==='ye'){
    echo "{$_COOKIE['username']}欢迎您<br/>";
    echo "<a href='logout.php'>注销</a>";
}else{
    echo "<a href='login.php'>请重新登录</a>";
}

?>