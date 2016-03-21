<?php
/**
 * @Author: anchen
 * @Date:   2016-03-20 17:14:03
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-03-20 19:04:24
 */

/**
 * 析构函数：__destruct()
 *
 * 构造函数是在对象产生的时候，自动执行
 * 析构函数是在对象销毁的时候，自动执行
 *
 * 构造函数就是出生时的题库
 * 析构函数就是临终遗言
 *
 * 对象如何销毁？
 * 1、显示的销毁 unset，赋值为null
 * 2、PHP是脚本语言，在代码执行到最后一行时，
 * 所有申请的内存都要释放掉
 * 自然，对象的那段内存也要释放掉，对象就被销毁了
 *
 * 对于PHP程序所做的web程序，想内存泄漏，也不是新手就可以做到的
 *
 */

class Human{
    public $name = null;
    public $gender = null;

    public function __construct(){
        echo '出生了',"<br>";
    }

    public function __destruct(){
        echo '终究没能逆袭',"<br>";
    }
}

$a = new Human();
unset($a);
$b = new Human();
$b = false;
$c = new Human();
$c = NULL;
echo "<hr>";
$d = new Human();

/**
 *  最后一次销毁，是PHP的页面执行完毕了
 *  然后系统回收，$d此时才销毁
 *  因此 显示hr 即灰线后面
 */

