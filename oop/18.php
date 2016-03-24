<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-24 22:48:25
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-24 22:55:45
 */

class Human{
    private $wife = "小甜甜";

    public function tell(){
        echo $this->wife,"<br>";
    }
    public function cry(){
        echo "5555<br>";
    }
}

class Stu extends Human{
    public function subtell(){
        echo $this->wife;
    }
}

$lisi = new Stu();
$lisi->cry();   //5555
$lisi->tell();  //小甜甜
$lisi->subtell();   //出错，Notice: Undefined property: Stu::$wife 
/**
 * 问：父类不是有wife属性么，为什么没继承过来呢？
 * 答：私有的属性，可以理解不能继承。（其实是能继承过来，只不过无法访问）
 * public protected private 中
 * public protected都可以继承，并拥有访问和修改的权限
 * 就好比说，家产已经继承了，愿意卖就卖，愿意改就改
 *
 * 而私有的，就像先祖的牌位，继承下来
 * 但是无权动用，只能供着
 *
 * 对于子类继承父类的protected/public属性/方法
 * 1、父类有的 子类继承
 * 2、父类有的 子类的可以更改
 * 3、父类没有的子类可以添加
 *
 * private属性和方法
 * 只能继承，无权操作
 */
