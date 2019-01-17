<?php
if (isset($_COOKIE['username']) && $_COOKIE['username']==='ye'){
    if (setcookie('username',$_COOKIE['username'],time()-3600)){
        header('Location:skip.php?url=index.php&info1=注销成功');
    }
    else{
        header('Location:skip.php?url=index.php&info1=注销失败');
    }

}


?>