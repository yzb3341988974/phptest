<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/8 0008
 * Time: 上午 10:00
 */

//--------------------------------------------------------------------1.....数据类型：布尔，整型，字符串，浮点型





//---------------------------------------------------------------2....变量
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




//-----------------------------------------------------------3.....常量 define() defined()
define("MY_NAME",'你是谁');
define("ID",123);
var_dump(MY_NAME);
echo ID;
echo MY_NAME;


//--------------------------------------------------------------4 .    .魔术常量

echo __FILE__;
echo __LINE__;



//------------------------------------------------------------5.... 字符串连接符: "."
//可以直接连接两个字符型变量,可以连接一个字符型变量和一个字符串，可以连接两个字符串
$a="字符串";
$b="连接符";
echo $a.$b;
echo $a.'abcde';
echo 'nid'.'aye';




//---------------------------------------------------------6....   赋值运算符：+=,-=,%=,.=,/=,*=;
$c=1;
$d=1;
$d+=$c;
echo $d;





//----------------------------------------7..   比较运算符 输出结果是一个布尔型
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




//----------------------------------------------8....逻辑运算符
//   输出是一个布尔型 对表达式进行逻辑运算 参与逻辑运算的表达式的值是布尔型的值，如果不是布尔型的值会被转换为
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
//逻辑与和逻辑或存在短路问题，逻辑与在确定第一个为false时不进行表达式2的判断，即结果已经为false，逻辑或在第一个表达式为true时已经为true不进行第二个表达式的运算。




//9----------------------------------------------...位运算符：很少用




//10--------------------------------------------..其他运算符：
//1)？ ： 三元运算符：表达式1 ？ 表达式2 ： 表达式3 ：如果表达式1位true则输出表达式2，如果表达式1为false则输出表达式3
//2)``:可以把系统的命令放在里面执行
$k=`ipconfig`;
var_dump($k);
//3)@:屏蔽表达式可能发生的错误
echo @$k;



//---------------------------------------11..运算符的优先级：
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



//------------------------------12.....分支执行
//单向条件if语句  双向条件if else语句，多向条件if elseif语句
//switch语句 switch(表达式){ case 值1: 语句块1； break; ..... default:语句块n;} 表达式的值最好是整型或字符串




//----------------------------------13...循环执行
//while(){}
//do{} while();
//for($i=0;$i<;$i++){}
for($i=0;$i<10;$i++){
   echo '执行到第'.$i.'步了<br/>';
   if($i>5) break;
}

//---------------------------14..特殊的流程控制语句
//1)break:用于switch语句，for，while，do...while，foreach,用于跳出循环
//2)continue :跳出本次循环，并没有结束整个循环语句，只能用于循环语句
//3)exit():结束当前php脚本的执行。die()



//---------------------------------15....自定义函数
function  exp1(){
    echo 'Nihao ';
    //return 1;
}
exp1();

//形参
function add($ab,$cd){
    echo $ab+$cd.'<br/>';

}
add(3,4);//实参,不可以少传

//返回值
function sub($ef,$gh){
    return $ef-$gh;//返回值给调用者,并结束这个函数，不再运行下面的；
}
sub(3,2);//没有结果，因为现在这个表达式是一个返回的值，并没有输出，默认为null
var_dump(sub(3,2));//输出1


//16-------------------------...php变量的范围
//1)局部变量:只在函数内调用
//2)全局变量:从定义地方开始到程序末尾都是有效的，函数内无法直接使用，要使用global声明为全局变量；常量可以在任何地方使用
$abc=10;
$abcd='个数';
function exp2(){
    global $abc,$abcd;
    echo $abc.$abcd;
}
exp2();

//3)静态变量:static
function exp3(){
    static $a=10;//仅在第一次调用函数时会使用,下次调用时这个值依然存在,直到脚本执行完毕
    echo ++$a;
}
exp3();//静态变量$a仅在第一次调用函数时执行,输出 11，但静态变量$a不会被释放，保存在其他内存中，
exp3();//第二次调用$a依然存在，输出12
exp3();//输出13
exp3();//输出14
exp3();//输出15

function exp4(){
    $a=10;
    echo  ++$a;
}
exp4();//输出11
exp4();//输出11,在第一次调用函数时输出11，但$a不是静态变量，所以不会被保存在独立的内存空间中，所以第二次调用还是会输出11
exp4();//输出11
exp4();//输出11


//-------------------------------------------17....参数的传递
//1)按值传递参数
//对形参的操作并不会影响到实参的值，两者之间没有关系
function exp5($a){
    echo '<br/>'.++$a;
}
$xa=10;
exp5($xa);//输出11
echo '<br/>'.$xa;//输出10

//2)按引用传递参数
//按引用传递参数，其中形参和实参指的同一个值，改变形参可以直接影响到实参的值。
function exp6(&$a){
    echo "<br/>".++$a;
}
$xb=10;
exp6($xb);//输出11
echo '<br/>'.$xb;//输出11

//3)函数参数的默认值
//给形参加默认值得时候是从左往右加的，右边的必须有了以后才能给左边的加。
function exp7($a=10){
    echo '<br/>'.$a;

}
exp7();


//4）可变长度参数列表
//PHP提供给我们的可以直接使用
//func_get_args();//获取到数据，形成全部数组
//func_get_arg();//获取数组的某个数
//func_num_args() ;//返回参数个数
//这三个函数可以使用在我们的自定义函数里
function exp8(){
    var_dump(func_get_args());//形成1维数组
    var_dump(func_get_arg(1));//输出第二个数
    var_dump(func_get_arg(2));//输出第三个数
    var_dump(func_num_args());//返回实参个数
}
exp8(1,2,3,4,5);


// --------------------------18可变函数
//把一个函数赋给一个变量
function exp9(){
    echo '输出';
}
$xc='exp9';
$xc();

//--------------------------19递归函数
//在函数内部自己调用函数
function exp10($a){
  echo  $a.'&nbsp;';
  if($a>0){
      exp10($a-1);
  }
  else{
      echo '<  > ';
  }
  echo $a.'&nbsp;';
}
exp10(10);


//------------------------------20内部函数
//php提供给了我们很多现成的函数或结构，我们可以在实际的开发中直接使用
//一些常用的内置函数，



//----------------------------------------------21数组
//1)数组的分类
//索引数组，关联数组
//2)数组的创建
//方法一
$student[0]=10;//加索引值
$student[1]='名字';
$student[2]='man';
$student[3]=80;
//需要使用print_r()函数来输出数组
echo '<br/>';
print_r($student);
var_dump($student);
//方法二
$student1[]=10;//不加索引值
$student1[]='名字';
$student1[]='man';
$student1[]=80;

//需要使用print_r()函数来输出数组
echo '<br/>';
print_r($student1);
var_dump($student1);
//方法三
$student3=array(
    'ID'=>10,
    'name'=>'名字',
    'sex'=>'man',
    'grade'=>80
);//索引值为数字
$student4=array(
    '1'=>10,
    '2'=>'名字',
    '3'=>'man',
    '4'=>80,
);
$student2=array(10,'名字','man',80);//索引值为数字
print_r($student2);
var_dump($student2);
print_r($student3);
var_dump($student3);
print_r($student4);
var_dump($student4);
//多维数组
$student5=array(
    '0'=>array(10,'名字','man',80),
    '1'=>array(10,'名字','man',80),
    '2'=>array(10,'名字','man',80),
    '3'=>array(10,'名字','man',80)
);
var_dump($student5);
print_r($student5);
echo $student5[0][0];//访问多维数组的数值
echo $student5[0][1];
echo $student5[0][2];
echo $student5[0][3];

//3)数组的遍历
//1))for循环:只适用于索引数组，不能用于关联数组
//count(数组）返回数组中数据的个数
echo '<br/>';
$student6=array('a','b','c','d','e');
echo count($student6);
for($i=0;$i<count($student6);$i++){//要使用索引数组，不能输出关联数组
echo $student6[$i];
}
//2))foreach语句遍历:foreach(数组名 as 变量1){每次循环执行的语句}
//显示索引值：foreach(数组名 as 变量1=>变量2){}




$student7=array(
    'ID'=>10,
    'name'=>'名字',
    'grade'=>80
);
echo count($student7);//不能使用for循环遍历


foreach ($student7 as $value){
echo $value.'<br/>';
}

foreach ($student7 as $key=>$value){
    echo $key.'=>'.$value.'<br/>';


}


$student8=array(
    'a',
    'b',
    'c',
    'd',
    'e',
    array(
        1,2,3,4,5
    )
);
foreach ($student8 as $val){
    var_dump($val);
}




$student9=array(
    array('afwefwaf','bfwfcq','cvqva','dvqvqa'),
    array('a','c','d'),
    array('b','c','d','e'),
    array('r','t','e')
);
foreach ($student9 as $value1){
    foreach ($value1 as $value2){
        echo  '<br/>';
        echo $value2.'    :';
        var_dump(substr_count($value2,'a'));
        var_dump(strpos($value2,'a'));
        if(strpos($value2,'a')===false){
            echo '没找到';
        }
        else{
            echo  '找到啦'.'<br/>';
        }
    }
}



$student10=array(
    array('a','b','c','d'),
    array('a','c','d','f'),
    array('b','c','d','e'),
    array('r','t','e','f')
);
echo '<table border=1>';
foreach ($student10 as $val){
echo "<tr><td>{$val[0]}</td><td>{$val[1]}</td><td>{$val[2]}</td><td>{$val[3]}</td></tr>";
}
echo '</table>';

//4)预定义超全局数变量
//已经定义好的变量（存放的数据的类型是数组）
//超全局：超级全局变量，作用域
//数据传递(提交数据)给服务器端主要有两种方式
//1))get方式
//格式：http://localhost/phptest1/index.php?id=10&name='你好'
//
var_dump($_GET);//输出10
//2))post方式

//见exp1.php

//$_GET

//5)处理数组的相关函数

//array_count_values()统计所以值出现的个数
$array1=array(1,'q','1','q','2');
print_r(array_count_values($array1));



//array_key_exists();检查给定的键名是否存在于数组中
$array2=array(
    'ID'=>10,
    'name'=>'李四'
);
echo '<br/>';
print_r( array_key_exists('ID',$array2))  ;
echo  '<br/>'.array_key_exists('ID',$array2);
echo '<br/>';
var_dump(array_key_exists('nihao',$array2));


//array_search()(数据,数组名,是否类型相同):输出对应值的索引，如果写上true，则判断类型是否也相同
$array3=array(
    '1'=>'one',
    '2'=>'two',
    '3'=>'three',
    '4'=>11
);
var_dump(array_search('one',$array3));
var_dump(array_search(11,$array3,true));
var_dump(array_search('11',$array3,true));


//in_array():检查数组中是否存在某个值,加上true判断类型
$array4=array(
    '1'=>'one',
    '2'=>'two',
    '3'=>'three',
    '4'=>11
);
var_dump(in_array('one',$array4));
var_dump(in_array('11',$array4));



//list()把数组中的值赋给变量，只用于数字索引数组，而且是从右边开始赋值
$array5=array(60,70,80);
list($zhangsan,$lisi,$wangsan)=$array5;
echo $zhangsan;
echo $lisi;
echo $wangsan;


//asort()对数据进行从小到大排序但不会改变索引值
$array6=array(
    'zhangsan'=>60,
    'lisi'=>70,
    'wanger'=>50,
    'mazi'=>100
);
asort($array6);
print_r($array6);
echo '<br/>';
array_reverse($array6);     //从大到小
print_r(array_reverse($array6));


//array_filter()过滤数组中的单元 true留下数组中的值，false去除数组中的值
function odd($a){
    return ($a%2==1);
}
function even($a){
    return ($a%2==0);
}
$array7=array(
    'a'=>1,
    'b'=>2,
    'c'=>3,
    'd'=>4,
    'e'=>5,
    'f'=>6
);
$array8=array(
    6,7,8,9,10
);
echo "<br/>";
echo "odd: \n";
print_r(array_filter($array7,"odd"));//过滤掉不符合函数的值，过滤掉偶数

echo "even: \n";
print_r(array_filter($array8,"even"));//过滤掉奇数



//22----------------------------------字符串函数

//1)去除空白或其他字符函数
//trim(变量，字符)去除字符串中左右两边的空白字符,第二个参数可以去除字符
//ltrim()去除左边空白
//rtrim()去除右边空白


$xd='   aaaaab   c cccccc    ';
$xe='aaaabcccccc';
var_dump($xd);
var_dump(trim($xd));
var_dump(trim($xe,'a'));



//2)大小写转换函数:
//strtoupper(变量);转为大写
//strtolower(变量);转为小写


$xf='aaaBBB';
var_dump(strtoupper($xf));
var_dump(strtolower($xf));


//3)字符串查找函数：
//1))substr_count(变量，查找的字符，开始查找的偏移位置,指定偏移位置最大搜索长度);查找字符出现的次数
$xg='afaefefeacaevve';
var_dump(substr_count($xg,'a',2));


//2))strpos(变量，查找字符，开始查找位置);字符首次出现的数字位置,
//没找到返回false,找到可能返回0，如果用if语句，0会返回false，要使用全等
$xh='tetetetettet';
var_dump(strpos($xh,'te'));


//3))strstr(变量,字符):查找字符并输出字符之后的字符串（包括字符），加上true会输出字符前面的字符串
$xi='abcdefg';
echo '<br/>';
var_dump($xi);
echo '<br/>';
var_dump(strstr($xi,'d'));
echo '<br/>';
var_dump(strstr($xi,'d',true));



//4))字符串替换函数
//str_replace(被替换的值，替换的值，字符串),可以使用数组,加上$count可以输出替换次数
$xj='abcdefg';
echo '<br/>';
var_dump(str_replace('abc','ABC',$xj));
var_dump(str_replace(array('e','f','g'),array('E','F','G'),$xj));


//5))与html标签相关的函数
//htmlspecialchars():把本来转换为html语言的标签保留.
$str=<<<start
<p style="color:red;font-size:28px">love</p>
start;
echo $str;
echo htmlspecialchars($str);

//strip_tags():去除html标签
$str1=<<<start
<p style="color:red;font-size:28px">love</p>
<div>afadfaf</div>
start;
echo $str1;
echo strip_tags($str1);
echo strip_tags($str1,'<div>');//第二个参数，保留div标签

//6))字符串截取函数
//substr()
$xk='faweffewafaefaw';
echo substr($xk,2);//负数从后面往前开始截

//7))字符串分割函数
//explode(分割值，变量，最多分割几个)输出为数组
$xl='test,test1,test2';
var_dump(explode(',',$xl));
var_dump(explode(',',$xl,2));

//str_split(变量，每个数组值的个数);把字符串转为数组
$xm='test';
var_dump(str_split($xm));
var_dump(str_split($xm,3));


//-------------------------------23.正则表达式



//1)正则表达式语法规则
//描述了一类字符串的特征，然后通过这个特征可以配合一些特定的函数来完成对字符串更加复杂的操作
//由普通字符和元字符组成

//preg_match_all('正则表达式','变量'，生成数组);
echo '<br/>';
$xn='/test/';//正则表达式
$str2='abctest';
var_dump(preg_match_all($xn,$str2,$arr));
var_dump($arr);




//2)元字符
// \d匹配十进制数字
echo '<br/>';
$xo='/t\dst/';
$str3='faefafet4stfefa';
var_dump(preg_match_all($xo,$str3,$arr1));
var_dump($arr1);
//  \D匹配除了十进制数字的字符
echo '<br/>';
$xp='/t\Dst/';
$str4='test tfst t\'st t4st  tst';
var_dump(preg_match_all($xp,$str4,$arr2));
var_dump($arr2);

//  \s匹配空白字符
echo '<br/>';
$xq='/t\sst/';
$str5="t\nst";
var_dump(preg_match_all($xq,$str5,$arr3));
var_dump($arr3);

//  \S匹配除空白字符以为的任意一个字符

// \w 一个数字 ，下划线或字母
echo '<br/>';
$xr='/t\wst/';
$str6='t_st';
var_dump(preg_match_all($xr,$str6,$arr4));
var_dump($arr4);

// \W匹配除了上面的

// . 匹配除了换行符之外的字符 要匹配.时使用反斜杠\转义.


//元字符
// * :放在*前面的字符可以 出现0次，可以出现1次，也可以出现多次
echo '<br/>';
$xs='/te*s*t/';
$str7='abcteeeeeeeeeeeeeeesssssssssssssssssst';
var_dump(preg_match_all($xs,$str7,$arr5));
var_dump($arr5);


//+ :放在+前面的可以出现1次或多次不可以不出现
echo '<br/>';
$xt='/te+st/';
$str8='abcteeeeeeeeeeeeeeest';
var_dump(preg_match_all($xt,$str8,$arr6));
var_dump($arr6);


//? ：？前面的可以出现0次或者1次
echo '<br/>';
$xu='/te?st/';
$str9='adwtest';
var_dump(preg_match_all($xu,$str9,$arr7));
var_dump($arr7);


//{n} :前面出现n次
echo '<br/>';
$xv='/te{5}st/';
$str10='adwteeeeest';
var_dump(preg_match_all($xv,$str10,$arr8));
var_dump($arr8);

//{n,}:不少于n次

//{n.m} ：至少n次，最多m次


//{n}与.结合
echo '<br/>';
$xw='/te.{5}st/';
$str11='adwtefaa2est';
var_dump(preg_match_all($xw,$str11,$arr9));
var_dump($arr9);


//*与.结合:   .*配合使用默认情况下是贪婪匹配，尽可能多的去匹配    后面加上？可以解决
echo '<br/>';
//$xx='/t.*t/';//贪婪匹配
$xx='/t.*?t/';//懒惰匹配
$str12='atdwtefaa2etst';
var_dump(preg_match_all($xx,$str12,$arr10));
var_dump($arr10);

//  ^ :匹配字符的开始位置
echo '<br/>';
$xy='/^test/';//下面的字符必须以t开头
$str12='testfaftest';
var_dump(preg_match_all($xy,$str12,$arr10));
var_dump($arr10);

//$  匹配字符串的结束位置
echo '<br/>';
$xz='/test$/';//下面的字符必须以$结尾
$str13='testfaftest';
var_dump(preg_match_all($xz,$str13,$arr11));
var_dump($arr11);

// .*和^ $配合使用
echo '<br/>';
$xab='/^t.*t$/';//下面的字符必须以t开头
$str14='tesfefewtfaftest';
var_dump(preg_match_all($xab,$str14,$arr12));
var_dump($arr12);

// |:匹配多个特征

echo '<br/>';
$xac='/test|fef|faf/';//下面的字符必须以t开头
$str15='tesfefewtfaftest';
var_dump(preg_match_all($xac,$str15,$arr13));
var_dump($arr13);


// [] 匹配括号内的任意一个字符
echo '<br/>';
$xad='/t[abcdef]st/';//下面的字符必须以$结尾
$str16='testfaftest';
var_dump(preg_match_all($xad,$str16,$arr14));
var_dump($arr14);


//[^]匹配除了括号里面的字符外的一个字符
echo '<br/>';
$xae='/t[^e]st/';//下面的字符必须以$结尾
$str17='tastfaftest';
var_dump(preg_match_all($xae,$str17,$arr15));
var_dump($arr15);


//() \\1表示第一个圆括号表示的内容
echo '<br/>';
$xaf='/t(e)s(t)\\1/';//下面的字符必须以$结尾 表示 teste
$str18='      teste    ';
var_dump(preg_match_all($xaf,$str18,$arr16));
var_dump($arr16);




//3)模式修正符

//  i :在和模式匹配是不区分大小写
echo '<br/>';
$xag='/test/i';
$str19='      test   Test  tEst    TEST    ';
var_dump(preg_match_all($xag,$str19,$arr17));
var_dump($arr17);


// m :多行匹配
//使用条件 ：第一，目标字符串中必须包括换行符 \n   第二 ，正则表达式中必须出现^或$

echo '<br/>';
//$xah='/test$/m';
$xah='/test\r*$/m';
//$str19="test\ntest\ntest\ntest\n";
$str19="test
test
test
test";
//在windows操作系统中换行有两个字符（\r\n）
//在linux操作系统中换行为(\n )
var_dump(preg_match_all($xah,$str19,$arr17));
var_dump($arr17);


// s ：设置后可以匹配所有字符
echo '<br/>';
$xai="/t.st/s";
$str20="t\nst";
var_dump(preg_match_all($xai,$str20,$arr19));
var_dump($arr19);


//U :禁止贪婪匹配
echo '<br/>';
//$xaj="/t.*?t/";
$xaj="/t.*t/U";
$str21="tfwqfwqt    fqwfqwfqft";
var_dump(preg_match_all($xaj,$str21,$arr20));
var_dump($arr20);


//4)与正则表达式配合的函数
//1))preg_match//返回正则表达式匹配的成功次数为0或1，而且只寻找第一次匹配
echo '<br/>';
$xak='/t(.*?)st/';
$str22=' test   tfefefst   tafefst  tfafest ';
var_dump(preg_match($xak,$str22,$arr21));
var_dump($arr21);
if(preg_match($xak,$str22,$arr21)){
    echo '找到啦';
}
else {
    echo '没找到';
}

//2))preg_match_all：
//第四个参数：可选 PREG_PATTERN_ORDER为默认的  PREG_SET_ORDER改变数组存储形式
echo '<br/>';
$xal='/t(.*?)(s)t/';
$str23=' test   tfdffst   tafefst  tfafdst ';
var_dump(preg_match_all($xal,$str23,$arr22,PREG_SET_ORDER));
var_dump($arr22);


//3))preg_replace()
//第一个参数：正则表达式
//第二个参数：要替换成的字符串
//第三个参数:整个字符串
//第四个参数(可选)：默认是-1，就是替换所有符合特征值的部分
//第五个参数(可选)：可以放一个变量，表示替换了几次
echo '<br/>';
$xam='/<div>(.*?)<\/div>/';
$str25="<a>\\1</a>";//选择第一个括号里面的内容，还可以使用$1
$str24="fefege<div>你好</div>fefefewf";
if(preg_match($xam,$str24,$arr23)) {
    var_dump(preg_replace($xam, $str25, $str24));
}else{
    echo '没找到';
}
var_dump($str24);


//preg_replace()传数组是一一对应的去替换
echo '<br/>';
$xan=array(
    '/<div(.*?)>(.*?)<\/div>/',
    '/<p(.*?)>(.*?)<\/p>/'
);
$str26=array(
    '<a$1 href="www.baidu.com">$2</a>',
    '<span$1>$2</span>'
);
$str27='<div style="color: red ;font-size=15px">你好吗</div>fefwef<p style="color: yellow;font-size: 15px">我很好</p>';

    echo "找到啦<br/>";
    echo '替换为:';
    var_dump(preg_replace($xan,$str26,$str27,-1,$count));
    var_dump($count);
    echo '原来的:'.$str27;









