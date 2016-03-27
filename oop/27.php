<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-27 15:16:37
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-27 15:53:48
 */
/**
 * 静态属性 静态方法
 *
 * 在属性和方法前 加static修饰，这种称为静态属性和静态方法
 * 从内存角度看
 * 静态属性存放在类中
 * 普通属性存放在对象中
 *
 * 推导出2点：
 * 类声明完毕，该属性就存在
 * 因为类在内存中只有一个，因此静态属性在内存中也只有一个
 *
 */
class Human{
    static public $head = 1;
    public function changeHead(){
        Human::$head = 9;
    }
    public function getHead(){
        echo Human::$head,'<br>';
    }
}

//现在没有对象，想访问静态的$head属性
/**
 * 普通属性包在对象内，用对象->属性名来访问
 * 静态属性放在类内，用类名::属性名来访问
 *
 * 静态属性既然存放于类空间内，则说明
 * 1：类声明完毕，该属性就已存在，不需要依赖于对象而访问
 * 2：因为类在内存中只有一个，因此静态属性在内存中也只有一个
 */
//当一个对象都没有，静态属性也已随类声明而存在
echo Human::$head,'<br>';
//静态属性只有一个，受影响后，所有的对象，也能捕捉到此对象
$m1 = new Human();
$m1->changeHead();
$m2 = new Human();
$m3 = new Human();
echo $m2->getHead();
echo $m3->getHead();