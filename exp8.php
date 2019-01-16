<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/16 0016
 * Time: 下午 7:45
 */
/*date_default_timezone_set('Asia/Shanghai');//设置时区
header('Content-type=text/html;charset=utf-8');
if (isset($_POST['submit'])){//判断是否点击
    if (is_uploaded_file($_FILES['upfile']['tmp_name'])){//判断是否是hhtp post上传
        $newname=date('Y-m-d H-i-s').rand(1000,3000);
        $houzhui=pathinfo($_FILES['upfile']['tmp_name']);//houzui[extension]是文件后缀名
        if(move_uploaded_file($_FILES['upfile']['tmp_name'],"update/{$newname}.{$houzhui['extension']}")){//是否移动到新的目录
            echo '上传成功';
        }
        else {
            echo '上传失败';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>上传文件</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="">
    <input type="file" name="upfile">
    <input type="submit" name="submit" value="上传">

</form>
</body>
</html>
*/
//第三遍
date_default_timezone_set('Asia/Shanghai');
header('Content_type:image/jpeg');
if (isset($_POST['dianji'])){
    if (is_uploaded_file($_FILES['myfile']['tmp_name'])){
        $newname=date('Y-m-d-H-i-s').rand(1000,3000);
        $houzhui=pathinfo($_FILES['myfile']['tmp_name']);
        if (move_uploaded_file($_FILES['myfile']['tmp_name'],"update/{$newname}.{$houzhui['extension']}")){
            echo '上传成功';
            var_dump($houzhui);
            var_dump($_FILES);
        }
        else {
            echo '上传失败';
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
<form method="post" enctype="multipart/form-data" action="">
    <input type="file" name="myfile">
    <input type="submit" name="dianji" value="上传">

</form>
</body>
</html>






