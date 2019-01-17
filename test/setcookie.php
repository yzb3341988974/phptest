<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/17 0017
 * Time: 下午 12:43
 */
$id=uniqid(rand(1000,9000));//产生随机id
var_dump(setcookie('id',$id,time()+3600));
