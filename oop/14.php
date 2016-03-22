<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-22 23:38:51
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-23 00:09:57
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
 * 李四读取和改变张三的钱
 * 这如果从生活角度来看，是不合理的
 *
 * 钱私有，是指“每个对象的钱，针对每个对象私有”
 * 即：张三的钱，由张三->showMoney才能引用
 * 或者说，李四->showMoney,也只有权引用 李四自己的money属性
 *
 * 但是，在上面的代码中，李四显然引用和改变张三的钱
 * 这是因为：
 * PPHP在实现上，并不是以对象为单位控制的权限
 * 而是已类为单位，来控制的权限
 * 所以前一夜，不断强调，类内，类外。而不是说对象内，对象外
 *
 * 因为 类声明一次，而对象却可能非常多
 * 以类为单位，简单了判断模型
 *
 * 从代码的角度来看
 * 内核……
 * zend引擎
 * ce==EG(scope)
 * 这一句判断的是
 * 调用者属性的1类 与 执行上下文所属的类 是否相等
 *
 * 在我们判断中:
 * $lisi -->类-->Human类
 * $lisi->setMoney()函数，也在Human类中
 * 在同一个类内部，可以调用
 * 这也说明了，确实是以类为单位，以类内类外为界限做的判断
 *
 * 从其他语言来看一看这个问题
 * java C#也存在此问题
 *
 * 从面向对象的角度来考虑
 * 我们的写法，也有问题
 * 就不应该把一个对象，直接传给一个方法来使用
 *
 * 而应该 zhangsan借钱，
 * 应该对应 lisi  收钱，
 * 即 应该尽量的来调用对象的方法。而不应该把对象当成参数传过去
 */