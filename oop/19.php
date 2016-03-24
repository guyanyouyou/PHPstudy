<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-24 23:07:41
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-24 23:40:45
 */

/**
 * 继承时，继承来protected/public属性和方法
 * 完全集成过来，属于子类
 * 继承来父类private属性/方法
 * 但不能操作
 */
class Human{
    private $wife = "小甜甜";

    public function cry(){
        echo "5555<br>";
    }

    public function pshow(){
        echo $this->wife,"<br>";
    }
}

class Stu extends Human{
    private $wife = "凤姐";
    public $height = 180;
    public function sshow(){
        parent::pshow();
        echo $this->wife,"<br>";
    }
}

$lisi = new Stu();
$lisi->sshow();
$lisi->pshow();
//print_r($lisi);

/**
 * 如果把Stu类重的wife = 凤姐去掉，什么效果？   //未定义属性
 * 如果把Human类重的wife=小甜甜去掉，什么效果？  //没有权限访问
 */
