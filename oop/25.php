<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-26 23:17:21
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-26 23:26:42
 */
class Light{

    //开灯方法,传一个玻璃参数
    public function ons(RedGlass $g){
        //用玻璃渲染颜色
        $g->display();
    }
}

class RedGlass{
    public function display(){
        echo "红光照耀<br>";
    }
}

class BlueGlass{
    public function display(){
        echo "蓝光照耀<br>";
    }
}
class GreenGlass{
    public function display(){
        echo "绿光照耀<br>";
    }
}

class Pig{
    public function display(){
        echo "八戒下凡，哼哼坠地<br>";
    }
}
//造手电筒
$light = new Light();
//造红玻璃
$red = new RedGlass();
//造蓝玻璃
$blue = new BlueGlass();


$light->ons($red);
$light->ons($blue);     //Catchable fatal error: Argument 1 passed to Light::ons() must be an instance of RedGlass, instance of BlueGlass given
/**
 * 加了类型检测后，传蓝玻璃不行
 * 解决：参数定为父类，传奇子类
 * 哲学：子类是父类，例：男人是人，白马是马，蓝玻璃是玻璃
 * 里氏代换：原能用父类的场合，都可以用子类来代替
 */
