<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/16 0016
 * Time: 下午 6:14
 * 文件上传
 */
date_default_timezone_set('Asia/Shanghai');
header('Content-type:text/html ;charset=utf-8');

if (isset($_POST['submit'])) {
    if (is_uploaded_file($_FILES['myfile']['tmp_name'])) {//is_uploaded_file判断文件是不是通过http post上传的
       $arr=pathinfo($_FILES['myfile']['name']);//tmp_name临时文件的名字 pathinfo[extension]获取文件拓展名
       $newname=date('Y_m_d_H_i_s_').rand(1000,5000);
       if (move_uploaded_file($_FILES['myfile']['tmp_name'],"update/{$newname}.{$arr['extension']}"));
        {//将上传的文件移动到新的位置
             echo '上传成功';
        }
    } else {
        exit('可能有攻击');
    }
    //var_dump($arr);
    //echo '<br/>';
    //var_dump($_FILES);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>上传</title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
 <input  type="file" name="myfile"/>
    <input type="submit" name="submit" value="开始上传">

</form>
</body>
</html>

