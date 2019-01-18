<?php
header('Content-type:text/html');
if (isset($_COOKIE['username']) && $_COOKIE['username']==='ye'){
    if (setcookie('username',$_COOKIE['username'],time()-3600)){
        header('Location:skip.php?url=index.php&info=注销成功');
    }
}
?>