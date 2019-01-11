<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/8 0008
 * Time: 上午 10:00
 */
//1.....数据类型：布尔，整型，字符串，浮点型





//2....变量
$t=123;
$r='shuchu$t';
$y="shuchu$t";
//定界符
$x=<<<a
shuchu' ''' '''''$t
a;
echo $r;
echo $y;
echo $x;




//3.....常量 define() defined()
define("MY_NAME",'你是谁');
define("ID",123);
var_dump(MY_NAME);
echo ID;



//4 .    .魔术常量
echo MY_NAME;
echo __FILE__;
echo __LINE__;



//5.... 字符串连接符: "."
//可以直接连接两个字符型变量,可以连接一个字符型变量和一个字符串，可以连接两个字符串
$a="字符串";
$b="连接符";
echo $a.$b;
echo $a.'abcde';
echo 'nid'.'aye';




//6....   赋值运算  符：+=,-=,%=,.=,/=,*=;
$c=1;
$d=1;
$d+=$c;
echo $d;





//7..   比较运算符 输出结果是一个布尔型
//:==值是否相等
$f=1;
$g=1;
echo $f==$g;
var_dump($f==$g);
//在测试的时候如果需要输出布尔型，最好使用var_dump()来输出更加准确；
//输出布尔型时echo true会输出1，echo false会什么都没有；
//===全等
$h=1;
$j='1';
var_dump($h==$j);//会有强制类型转换
var_dump($h===$j);//没有强制类型转换
var_dump($h===(int)$j);
//!=如果不相等则输出true
//<>如果不相等则输出true
//！==不全等
$i=11;
$j='11';
var_dump($i!=$j);//false 会有强制类型转换，把$j转换为int
var_dump($i!==$j);//true $j不会被强制类型转换
// <小于
// >大于
// <=小于等于
// <=大于等于




//8....逻辑运算符   输出是一个布尔型 对表达式进行逻辑运算 参与逻辑运算的表达式的值是布尔型的值，如果不是布尔型的值会被转换为
//布尔类型的值再参与运算
//逻辑与  ：&&(and)  有短路问题和运算符优先级问题
var_dump(($i==$j)&&($i!==$j));//true&&true=true
var_dump(($i===$j)&&($i!==$j));//false&&true=false
var_dump(($i===$j)&&($i !=$j));//false&&false=false
var_dump(($i==$j)&&($i!=$j));//true&&false=false
//以下值被认为是false：布尔值false，0，浮点型0.0，空白字符串或空白字符0，没有成员的数组，NULL
var_dump(false);
var_dump((bool)0);
var_dump((bool)0.0);
var_dump((bool)"");// 不能有空格
var_dump((bool)'0');
var_dump((bool)array());
var_dump((bool)NUll);
//逻辑或：||(or),表达式有一个为true则结果为true，只有当两边表达式都是false时结果才为false， 有短路问题和运算符优先级问题
var_dump(($i==$j)||($i!==$j));//true||true=true
var_dump(($i===$j)||($i!==$j));//false||true=true
var_dump(($i===$j)||($i !=$j));//false||false=false
var_dump(($i==$j)||($i!=$j));//true||false=true
//逻辑亦或:xor,表达式左右两边的结果不一样则为true
var_dump(($i==$j)xor($i!==$j));//true xor true=false
var_dump(($i===$j)xor($i!==$j));//false xor true=true
var_dump(($i===$j)xor($i !=$j));//false xor false=false
var_dump(($i==$j)xor($i!=$j));//true xor false=true
echo '<br/>';
//逻辑非：！将原来表达式的值否定掉。原来是true则结果为false，原来是false则结果为true




//9...位运算符：很少用




//10..其他运算符：
//？ ： 三元运算符：表达式1 ？ 表达式2 ： 表达式3 ：如果表达式1位true则输出表达式2，如果表达式1为false则输出表达式3
// ``:可以把系统的命令放在里面执行
$k=`ipconfig`;
var_dump($k);
//@:屏蔽表达式可能发生的错误
echo @$k;



//11..运算符的优先级：
//1）递增递减，无结合方向
//2）逻辑非，右结合方式
//3)乘，除，取余 ，左结合方式
//4)加，减，字符串连接符，左结合方式
//5)大于，大于等于，小于，小于等于，不等于(<>),无结合方向
//6)等于(==),不等于(!=)，全等于，不全等于，无结合方向
//7)逻辑与&& ，左结合
//8)逻辑或||，左结合
//9)三目运算 ？:   ，左结合
//10)赋值运算符  右结合
//11)逻辑异或  左结合
//11)逻辑异或  左结合


//12.....分支执行
//单向条件if语句  双向条件if else语句，多向条件if elseif语句
//switch语句 switch(表达式){ case 值1: 语句块1； break; ..... default:语句块n;} 表达式的值最好是整型或字符串


//13...循环执行
//while(){}
//do{} while();
//for($i=0;$i<;$i++){}
for($i=0;$i<10;$i++){
   echo '执行到第'.$i.'步了<br/>';
   if($i>5) break;
}

//14..特殊的流程控制语句
//1)break:用于switch语句，for，while，do...while，foreach,用于跳出循环
//2)continue :跳出本次循环，并没有结束整个循环语句，只能用于循环语句
//3)exit():结束当前php脚本的执行。die()




