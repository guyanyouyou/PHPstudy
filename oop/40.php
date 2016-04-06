<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-05 22:30:05
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-04-05 23:21:03
 */
/**
 * 抽象类：无法实例化
 * 类前加 abstract,此类就成为抽象类，无法实例化
 *
 * 春秋战国时期，燕零七 飞行器专家 能工巧匠
 * 他写了一份图纸---飞行器制造术
 * 飞行器秘制图谱
 * 1：要有一个有力的发动机，喷漆式
 * 2：要有一个平衡舵，掌握平衡
 * 他的孙子问他：发动机怎么造呢？
 * 我是造不出来，但我相信后代有人造出来
 *
 * 总结：
 * 类前加abstract是抽象类
 * 方法前加abstract是抽象方法
 *
 * 抽象类不能实例化
 * 抽象方法 不能由方法体
 *
 * 有抽象方法，则此类必是抽象类
 * 抽象类内未必有抽象方法
 *
 * 但是 --- 即便全是具体方法，但类是抽象的
 * 也不能实例化
 */
//燕零七的构想，当时的科技造不出来，即这个类只能在图纸化，无法实例化
//此时，这个类没有具体的方法去实现，还太抽象
//因此我们把他做成一个抽象类
abstract class FlyIdea{
    //大力引擎，当时也没法做,这个方法也实现不了
    public abstract function engine();
        //public abstract function engine(){
        //}
        //Fatal error: Cannot instantiate abstract class FlyIdea

    //平衡舵
    public abstract function blance();
        //注意：抽象方法 不能由方法提
        //下面这样的写法是错误的
}
/**
 * 抽象类不能new来实例化
 * 下面这行是错误的
 * $kongke = new FlyIdea();
 * Fatal error: Cannot instantiate abstract class FlyIdea

 */

//到了明朝，万户用火箭解决了发动机的问题
abstract class Rocket extends FlyIdea{
    //万户把engine方法给实现了，不再抽象类
    public function engine(){
        echo "点燃火药，失去平衡，嘭！<br>";
    }
    //但是万户实现不了平衡舵
    //因此平衡舵对于Rocket类来说
    //还是抽象的
    //类也是抽象的
}

//到了现代，燕十八亲自制作飞行器
//这个Fly类中，所有抽象方法都已经实现了
class Fly extends Rocket{
    public function engine(){
        echo "有力一扔<br>";
    }
    public function blance(){
        echo "两个机翼保持平衡<br>";
    }
    public function start(){
        $this->engine();
        for ($i=0; $i < 10; $i++) {
            echo "平稳飞行<br>";
        }
    }
}
$apache = new Fly();
$apache->start();


abstract class Car{
    public function run(){
        echo "滴滴";
    }
}
class qq extends Car{

}
//$qq = new Car();    //Fatal error: Cannot instantiate abstract class Car
$qq = new qq();