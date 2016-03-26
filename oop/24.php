<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-26 19:44:05
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-26 23:16:58
 */
/**
 * 一段代码，在java中编辑无法通过
 * 原因是：
 *
 * ons方法，指定了接收的参数必须是redGlass的对象
 * 因此，你传一个蓝光玻璃，不行！
 *
 * 强类型语言的一个特点，
 * 函数参数，函数的返回值，都是定死的。
 */
class Light{

    //开灯方法,传一个玻璃参数
    public function ons($g){
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
//创建一个手电筒
$light = new Light();
//创建3块玻璃
$red = new RedGlass();
$blue = new BlueGlass();
$green = new GreenGlass();

//变红灯
$light->ons($red);
//变蓝灯
$light->ons($blue);
//变绿灯
$light->ons($green);

//调用错了
$pig = new Pig();
$light->ons($pig);

/**
 * 分析 与java那段出错的程序相比
 * php没报错
 * 因为PHP是弱类型动态语言
 *
 * 一个变量
 * $var = 8;
 * $var = 'hello';
 * $var = new pig();
 * 一个变量，没有类型，你装什么类型都行
 * 同理，传参也不限制类型，传什么参都行
 *
 * 所以，对于PHP动态语言来说，岂止是多态，简直是变态。
 *
 * 又有专家说，你这个太灵活了，简直变态，不能这么灵活
 * 否则我们就不说你是多态
 * 答：别急，我们不让PHP这么灵活还不行么
 */