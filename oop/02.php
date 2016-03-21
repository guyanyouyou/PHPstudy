<?php
/**
 * @Author: anchen
 * @Date:   2016-03-20 15:48:52
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-03-20 16:00:20
 */
/**
 * 1、关于属性值，可以声明属性并赋值，也可以声明属性先不赋值
 * 如果不赋值，则属性的初始值是NULL
 *
 * 2、关于PHP中的类，请注意，属性必须是一个“直接的值”
 * 是8种类型任意的“值”
 * 不能是：表达式1+2的值
 * 不能是：函数的返回值time()
 *
 * 这点和java不一样
 */

class Human{
    public $age = 0;
}

$a = new Human();
echo $a->age,"<br>";

class People{
    public $age;
}

$b = new People();
var_dump($b->age);
echo "<br>";