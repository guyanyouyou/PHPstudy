<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-01 23:34:45
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-04-01 23:44:46
 */
/**
 * final 最终的
 * 这个关键词，在php中，可以修饰类名，方法名，但不能修饰属性
 * final修饰类，则此类不能够被继承
 * final修饰方法，此方法不影响继承，但是此方法不允许重写
 * 在java中，final也每一修饰属性，此时属性值就是一个常量，不可修饰
 * 问：PHP的类中，可不可以有常量
 * 答：有
 */

/*final class Human{

}
class Stu extends Human{

}*/
/**
 * 不能继承最终的类
 */
class Human{
    final public function say(){
        echo "华夏子孙";
    }
    public function show(){
        echo "哈哈";
    }
}

class Stu extends Human{

}

$ming = new Stu();
$ming->say();   //final方法可以继承

class Freshman extends Stu{
    public function say(){
        echo "我要出国，做美利坚人";  //不能覆盖final方法
    }
}