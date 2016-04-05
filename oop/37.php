<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-04 22:12:51
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-04-04 22:29:43
 */
/**
 * 普通常量 define('常量名',常量值)
 * 以前说过：define定义的常量，全局有效
 * 无论是页面内，函数内，类内，都可以访问
 *
 * 能否定义 专门在类内发挥作用的常量
 * 专门在类内发挥作用 说明
 * 1:作用域在类内，类似于静态属性
 * 2：又是常量，则不可改
 *
 * 其实就是“不可改变的静态属性”
 * 类常量 在类内用const声明即可
 * 前面不加修饰符,
 * 而且权限是public，即外部也可访问
 *
 *
 */
define('ACC','Deny');

class Human{
    const HEAD = 1;
    public static $leg =2;
    public static function show(){
        echo ACC,'<br>';
        echo self::HEAD,'<br>';
        echo self::$leg,'<br>';
    }
}

Human::show();
echo Human::HEAD;