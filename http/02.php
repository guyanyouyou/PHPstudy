<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-06-01 23:29:53
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-06-01 23:50:44
 */
//这个程序是把收到的数据，写入文本
//要求用telnet来请求它
//
//分析：要用POST方法
//$方法 $路径 $版本
//请求行……
//主体内容……
//据上：
/*POST /oop/PHPstudy/http/02.php HTTP/1.1
Host:localhost
Content-length:23
Content-type:application/x-www-form-urlencoded

username=zhangsan&age=28*/
//
$str = implode($_POST,"n");
file_put_contents('./post.txt', $str);
echo 'write ok';