<?php
/**
 * @Author: anchen
 * @Date:   2016-03-20 15:29:45
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-03-20 15:41:17
 */

/**
 * 人类
 * 声明语法：
 * class 类名{
 *
 * }
 *
 * 这个类，没有属性，也没有方法
 */

class People{
    //public的含义先别管
    public $name = "nobody";
    public $weight = '2.5kg';
    public $height = '50cm';

    public function cry(){
        echo "呱呱坠地";
    }
}

/**
 * 有了泪，就可以产生对象了
 * 如何通过类来产生对象？
 *
 * new 类名();
 * 这个语句返回对象
 *
 * 返回的对象 赋给一个变量
 */
$a = new People();
print_r($a);

/**
 * 这个$a是什么，a对象
 * 就是一个箱子，里面装了N多属性和属性值
 * {name:nobody,height:50cm,weight:2.5kg}
 * 可以看出 $a 是一个复合数据
 * 我们要想访问$a的名字，，即$a里面的name的值
 * 我们可以怎么访问呢？
 * 答：肯定是得通过$a来访问了
 * $a->属性名就可以访问该属性的值
 */

echo $a->name,"<br>";
echo $a->weight,"<br>";
echo $a->height,"<br>";