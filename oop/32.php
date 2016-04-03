<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-03 11:29:58
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-04-03 12:33:15
 */
/**
 * 魔术方法：
 * 是指某些情况下，会自动调用的方法，称为魔术方法
 * PHP的面向对象中，提供了这几个魔术方法，
 * 他们的特点，都是以__(双下划线)开头的
 *魔术方法
 * __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), *__unset(), __sleep(), __wakeup(), __toString(), __invoke(), __set_state() 和 __clone()
 *
 * __construct() :构造方法
 * __destruct() :析构方法
 * __clone()  :克隆方法，当对象被克隆时，将自动调用
 */

/*
 __clone()
 class Human{
    public $age = 22;
    public function __clone(){
        echo "有人克隆！假冒！";
    }

}

$lisi = new Human();
$zhangsan = clone $lisi;*/

//接下来讲6个在项目中，尤其是自己想写框架时很实用的几个函数
// __call(), __callStatic(), __get(), __set(), __isset(), *__unset()
/*class Human{
    private $money = "30两";
    protected $age = 23;
    public $name = "lily";
}

$lily = new Human();
echo $lily->name,'<br>';  //lily
//echo $lily->age,'<br>'; //Fatal error: Cannot access protected property Human::$age
//echo $lily->sister,'<br>'; //otice: Undefined property: Human::$sister*/
class Human{
    private $money = "30两";
    protected $age = 23;
    public $name = "lily";
    public function __get($property){
        echo "你想访问我的",$property,"属性";
    }
}
$lily = new Human();
echo $lily->name,'<br>';  //lily
echo $lily->age,'<br>'; //你想访问我的age属性
echo $lily->money,'<br>'; //你想访问我的money属性
echo $lily->friend,'<br>'; //你想访问我的friend属性
/**
 * 可以总结出：
 * 当我们调用一个权限上不允许访问和不存在的属性时，
 *
 * 流程：
 * $lily->age --无权 --> get($age)
 * $lily->friend --没有此属性 --> get($friend)
 *
 * 生活中，你帮别人看守小卖店
 * 买牙刷-->给你牙刷
 * 买毛巾-->给你毛巾

 * 这个POS机挺好-->(POS是商店的工具，私有的，不卖的：“你无权买”)，但是我们用__get方法，
 * 就有一个友好处理的机会
 *
 * 系统直接报错，甚至fatel error,通过__get(),我们就能自定义用户访问时的处理行为
 */

$lily->aaa = 111;
$lily->bbb = 222;
print_r($lily);
/**
 * 竟然给加上了
 * 其实，对象就是一个属性集，在js中更明显
 * 如果这么随便就能加了属性，导致这个对象属性过多，不好管理
 */
class Stu{
    private $money = "30两";
    protected $age = 23;
    public $name = "hmm";
    public function __set($a,$b){
        echo "你想设置我的",$a,"属性","<br>";
        echo "且值是",$b,"<br>";
    }
}
echo "<br>";
$hmm = new Stu();
$hmm->aaa = 111;    //你想设置我的aaa属性,且值是111
$hmm->name = '韩梅梅';
print_r($hmm);
/**
 * 如上，总结出 __set()的作用
 * 当未无权操作的属性赋值时，
 * 或不存在的属性赋值时，
 * __set()自动调用
 * 且自动传2个参数 属性 属性值
 * 例：
 * $hmm->age = 28; ---无权---> __set(age,28);
 */

/**
 * __isset() __unset();
 */
class Dog{
    public $leg = 4;
    protected $bone = "猪腿骨";
    public function __isset($p){
        echo "你想判断我的",$p,"属性存不存在<br>";
        return 1;
    }
    public function __unset($p){
        echo "你想去掉我的",$p,"属性？<br>";
        return 1;
    }
}
echo "<br>";
$hua = new Dog();

if (isset($hua->leg)) {
    echo $hua->leg;
}
echo "<br>";
if (isset($hua->tail)) {
    echo "经判断有tail属性";
}else{
    echo "没有tail";
}
/**
 * __isset()方法
 * 当isset(对象属性)，判断对象不可见的属性时(protected/private/不存在的属性)
 * 会引发__isset()来执行
 * 问：isset($obj->xyz)属性为真能说明类声明了一个xyz的属性？
 * 答：不能
 */
echo "<br>";
echo "__unset测试<br>";
print_r($hua);
unset($hua->leg);
unset($hua->bone);
print_r($hua);
/**
 * __unset()方法
 * 当用unset销毁对象的不可见属性时，会引发__unset();
 * unset($hua->tail) ---- 没有tail属性 ----> __unset(tail)
 */