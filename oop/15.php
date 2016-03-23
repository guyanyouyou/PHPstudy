<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-23 23:22:23
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-23 23:49:12
 */
/**
 * 继承：是指以一个类为父类，另一个类可以作为其子类
 * 子类在继承了父类的属性/方法的基础上
 * 进一步增添或修改
 */

//定义3个类，人类，学生类，律师类
class Human{
    private $height = 160;

    public function cry(){
        echo "55555~<br>";
    }
}

class Stu{
    private $height = 170;
    public $snum = "00134";

    public function cry(){
        echo "59啊59……<br>";
    }

    public function study(){
        echo "好好学习，天天向上<br>";
    }
}

class Lawer{
    private $height = "160";
    public $area = "经济案件";

    public function cry(){
        echo "5555<br>";
    }

    public function bianhu(){
        echo "我的当事人是无罪的<br>";
    }
}

$zhoukou = new Human();
$zhoukou->cry();

$xiaoming = new Stu();
$xiaoming->cry();
$xiaoming->study();

$lizhuang = new Lawer();
$lizhuang->cry();
$lizhuang->bianhu();

/**
 * 思考：
 * 1、学生和律师，归根结底还是人！
 * 自然，人的属性和方法，自然就有
 *
 * 2、学生和律师，虽然是人，但比最原始的人
 * 又多了一些属性和方法
 *
 * 而我们目前写的3个类
 * 完成了第2点：即有原始人的属性，又有学生/律师的独特属性
 *
 *
 * 但是，没有很好的利用上第1点
 * 即：既然是人，那默认就有身高的属性，何必再声明一遍？
 *
 * 这里的代码，就已经冗余！
 * 如何达到 学生/律师 默认就有人的属性，达到代码重用和简介
 * 答：利用继承
 */