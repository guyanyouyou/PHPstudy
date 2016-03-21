<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-21 22:26:41
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-21 22:59:39
 */

class Human{
    public $name = 'lisi';

    public function who(){
        echo $this->name;
    }
    public function test(){
        echo $name;
    }
}

$a = new Human();
$a->who();
$a->test();  //未定义的变量报错
/**
 * 和java、c++相比
 * 方法体内想访问调用者的属性，必须用$this
 * 如果不加，则理解为方法内部的一个局部变量
 */
/*
this的绑定
当一个对象调用其方法时
该方法执行之前，先完成一个绑定
$this->绑定到调用此方法的对象

从说呢干活的角度来理解$this
女娲造人时，早了一个“悔恨”的方法
{
    抓【自己】头发
    抽【自己】脸
}

世界上的人那么多，悔恨时，抓谁的头发？
抽谁的脸？
张三、李四、王五都不能说明合理的情况
只能理解为 自己
*/
