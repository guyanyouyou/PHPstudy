<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-04 02:32:07
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-04-04 03:00:35
 */
/**
 *  重写/覆盖
 * 重载
 *
 * 魔术常量，类常量
 * 抽象方法
 * 接口
 */
/**
 * 重写/覆盖 override
 * 指：子类重写了父类的同名方法
 *
 * 重载 overload
 * 指：存在多个同名方法，但参数类型/个数不同
 * 传不同的参数，调用不同的方法
 * 但是在PHP中，不允许存在多个同名方法
 * 因此，不能够完成java，c++中的这种重载
 * 但是PHP可以达到类似的效果
 */

class Human{
    public function say($name){
        echo $name,"吃了么<br>";
    }
}

class Stu extends Human{
    public function say($name){
        echo "切克闹，卡毛败笔<br>";
    }
}

$ming = new Stu();
$ming->say('张三');

class Calc{
    public function area(){
        //判断一个调用area时，得到的参数个数
        $args = func_get_args();
        if (count($args) == 1) {
            return 3.13*arg[0]*arg[0];
        }elseif ($count($args) == 2) {
            return $args[0]*$args[1];
        }else{
            return "未知图形";
        }
    }
}
$calc = new Calc();
//计算圆的面积
$calc->area(12);
//计算矩形的面积
$calc->area(6,5);