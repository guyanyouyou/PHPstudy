<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-06 23:43:29
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-05-16 20:35:09
 */
class Animal{
    const age = 1;
    public static $leg = 4;

    public static function cry(){
        echo "呜呜<br>";
    }

    public static function t1(){
        self::cry();
        echo self::age,'<br>';
        echo self::$leg,'<br>';
    }
    public static function t2(){
        static::cry();
        echo static::age,'<br>';
        echo static::$leg,'<br>';
    }
}

class Human extends Animal{
    const age = 30;
    public static $leg = 2;
    public static function cry(){
        echo "哇哇<br>";
    }
}

class Stu extends Human{
    const age = 16;
    public static $leg = 3;
    public static function cry(){
        echo "伊伊<br>";
    }
}

Stu::t1();
Stu::t2();