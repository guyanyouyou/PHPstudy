<?php
/**
 * @Author: anchen
 * @Date:   2016-03-20 16:38:18
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-03-20 16:50:11
 */
/**
 * 构造函数 —__construct()
 */

class Human{
    public $name = '李四';
    public $gender = '男';
}

$a = new Human();
$b = new Human();
$c = new Human();

echo $a->name.'<br>';
echo $b->name.'<br>';
echo $c->name.'<br>';

echo $a->gender.'<br>';
echo $b->gender.'<br>';
echo $c->gender.'<br>';

/**
 * 在上面的例子中，体现出类是模板，对象根据模板造出的实例
 * 但是，模板是固定的。
 *
 * 因此，导致造出来的对象，各种属性值都一样
 * 这显示与现实生活中的逻辑不符
 *
 * 比如：新生儿
 * 性别
 * 姓名
 * 体重
 * 这些都不一样
 *
 * 同一个模版，不同的对象，这就是一对矛盾？
 * 答：
 *
 * 想一想：为什么新生儿有的是男性有的是女性？
 * 答：因为，染色体不一样
 * x,y -> 男
 * x,x -> 女
 * 造对象时，传x染色体，还是y染色体，都有可能
 *
 * 这说明创建对象时，可以传参
 *
 * 在类中，有一个构造函数，
 * 就是用开初始化对象用的，
 * 利用构造函数,你有机会操作对象
 * 并改变他的值
 */