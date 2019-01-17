<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 下午 7:43
 */
date_default_timezone_set('Asia/Shanghai');
header('Content-type:text/html');
if (isset($_POST['submit'])){
    if (is_uploaded_file($_FILES['file']['tmp_name'])){
        $newname=date('Y-m-s H-i-s').rand(1000,9999);
        $str=pathinfo($_FILES['file']['name']);
        if (move_uploaded_file($_FILES['file']['tmp_name'],"update/{$newname}.{$str['extension']}")){
            echo '成功';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>上传</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit">
</form>
</body>
</html>

