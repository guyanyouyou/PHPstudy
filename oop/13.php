<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-22 23:15:58
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-22 23:33:50
 */
class Human{
    private $money = 1000;

    public function getMoney($people){
        return $people->money;
    }

    public function setMoney($people){
        $people->money -= 500;
    }
}

$zhangsan = new Human();
$lisi = new Human();

echo $lisi->money;  //不行

//让李四去打探张三的钱
$lisi->getMoney($zhangsan);

//让李四去改变张三的钱
$lisi->setMoney($zhangsan);
echo $lisi->getMoney($zhangsan);

/**
 * 奇怪之初在于，
 * zhangsan的钱应该由zhangsan 来调用，getMoney和setMoney才能受影响
 *
 * 但是和上一个例子中所写的原则是符合的：
 * 26行调用getMoney,有权
 * getMoney() 第12行，又在类的{}内，有权读取私有属性 money
 *
 * 29行，调用setMoney() public有权
 * setMoney() 第16行，修改zhangsan的money，发生在类的{}内，有权操作
 *
 */