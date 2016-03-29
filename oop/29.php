<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-29 22:49:36
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-29 23:04:21
 */
/**
 * 总结 self，parent的用法
 * self：本身，自身（本类，不要理解成本对象）
 * parent：父类
 *
 * 在引入自身的静态属性/静态方法
 * 以及父类的方法时，可以用到
 *
 * 用法：
 * self:$staticProperty
 * self:staticMothod
 * parent:$staticProperty
 * parent:Mothod
 */

class Human{
    static public $head = 1;

    public function say(){
        echo Human::$head,"<br>";
    }
}
echo Human::$head,"<br>";

$lisi = new Human;
echo $lisi->say();

//某一天，类名要统一，规范化。Human不叫Human了，叫CHuman
//导致类内部，凡引用到自身类名的也要改
class CHuman{
    static public $head = 1;

    public function say(){
        echo self::$head;
    }

    public function show(){
        echo "hello";
    }
}

class Stu extends CHuman{
    static public $head = 2;
    public function say(){
        echo self::$head,"<br>";
        echo parent::$head,"<br>";
    }
    public function show(){
        parent::show();
    }
}
$ming = new Stu();
$ming->say();
$ming->show();  //hello，因为stu把chuman的show方法继承下来了