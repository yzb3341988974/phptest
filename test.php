<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/18 0018
 * Time: 上午 10:31
 */
date_default_timezone_set('Asia/Shanghai');
header('Content-type:text/html');
if(isset($_POST['submit'])){
    if (is_uploaded_file($_FILES['myfile']['tmp_name'])){
        $newname=date('Y-m-d H-i-s').rand(1000,9000);
        $str=pathinfo($_FILES['myfile']['name']);
        if (move_uploaded_file($_FILES['myfile']['tmp_name'],"update/{$newname}.{$str['extension']}")){}
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
    <input type="file" name="myfile">
    <input type="submit" name="submit">
</form>
</body>
</html>
