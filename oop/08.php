<?php
/**
 * @Author: anchen
 * @Date:   2016-03-20 19:06:58
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-03-20 19:23:51
 */
//对象的回收机制
//
class Human{
    public $name = '张三';
    public $gender = null;

    public function __destruct(){
        echo '死了<br>';
    }
}

$a = new Human();
$d = $c = $b = $a;

echo $a->name,"<br>";
echo $b->name,"<br>";

$b->name = "李四";

echo $a->name,"<br>";
echo $b->name,"<br>";
unset($a);  //$b,$c,$d在指向对象，因此对象不能销毁
echo "<hr>";

//死几次
//死在灰线上还是灰线下

//对象默认是引用传值
//对象的销毁是指object的销毁
//就像一间房子推平一样
//$a、$b、$c、$d是指向房子的钥匙
//
//在此处，页面运行完毕，对象销毁，执行析构函数