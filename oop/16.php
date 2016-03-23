<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-23 23:49:21
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-24 00:10:33
 */
/**
 * 继承
 * 语法：extends
 * 子类 extend 父类{
 *
 * }
 *
 * 注意点：子类 只能继承自一个父类
 * 不能这样写:
 * subClass extend Dog,Cat,Pig{
 *
 * }
 */
//定义3个类，人类，学生类，律师类
class Human{
    private $height = 160;

    public function cry(){
        echo "55555~<br>";
    }
}

//再声明一个学生类，学生本质上还是人
//只不过是人类中，稍微特殊一点的一个群体
//即：人类的基础上，衍生出学生类
//可以让学生类 继承自人类
class Stu extends Human{

}

$zhoukou = new Human();
$zhoukou->cry();

$lily = new $Stu();
$lily->laugh(); //未定义的方法
$lily->cry();
/**
 * 思考：
 * 在学生类中
 * laugh方法和cry方法都未定义
 * 为什么cry()调用成功
 * lauth()调用失败
 * 答：因为Stu类 继承自Human类
 *
 * 现实中，继承的例子更多
 * 你同事高富帅，某天开了个宝马
 * 他没有宝马，但是他爹有宝马
 */
class Lawer{

}