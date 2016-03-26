<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-26 19:14:46
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-26 19:43:39
 */
/**
 * private
 * protected
 * public
 * 三者的区别
 *
 *          private       protected        public
 * 本类内      y              y               y
 * 子类内      N              y               y
 *   外部      N              N               y
 *
 * 注意：在java中，如果属性/方法前面不写任何参数
 * public/protected/private都不写，也是可以的，friendly
 *
 * 在PHP中，如果public/protected/private都不写
 * 则理解为public，建议养成好习惯，不要不写
 */

class Human{
    private $name = 'zhangsan';
    protected $money = 3000;
    public $age = 28;
    public function say(){
        echo "我叫",$this->name,"<br>";
        echo "我有",$this->money,'元钱<br>';
        echo "我今年",$this->age,"岁<br>";
    }
}

class Stu extends Human{
    private $friend = "小花";
    public function talk(){
        echo "我叫",$this->name,"<br>";
        echo "我有",$this->money,'元钱<br>';
        echo "我今年",$this->age,"岁<br>";
    }
}

$ming = new Stu();
//echo $ming->friend; //Fatal error: Cannot access private property Stu::$friend
//echo $ming->money;  //Fatal error: Cannot access protected property Stu::$money
echo $ming->age,'<br>';
/**
 * 总结：
 * public 可以在类外调用，权限最为宽松
 * protected和private不能在类外调用
 *
 * public在类内调用行不行？
 * 答：当然行，类外都可以，权限很宽松
 */
$ming->talk();
echo "<hr>";
/**
 * Undefined property: Stu::$name
 * 我有3000元钱
 * 我今年28岁
 *
 * 分析原因：Undefined property: Stu::$name 这是说明Stu对象没有name属性
 * 但昨天说，私有的不是可以继承么？
 * 是可以继承过来，但系统有标记，标记其为父类层面的私有属性
 * 因此无权调用，导致此错发生
 *
 * 可以分析出：
 * 子类可以访问 public
 * protected 可以在子类内部访问
 *
 * protected能子啊子类访问，能在本类内访问？
 * 答：当然可以
 */

$yuanmou = new Human();
$yuanmou->say();
