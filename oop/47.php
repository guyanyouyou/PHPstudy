<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-05-29 15:31:28
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-05-29 15:51:01
 */
//autoload用法
//
/*function __autoload($c){
    echo './'.$c.'.php','<br>';
    require('./'.$c.'.php');
}
$lisi = new HumanModel();
$lisi->t();*/

function test(){
    //函数内可以写任何合法的PHP代码，包含再声明一个函数/类
    class Bird{
        public static function sing(){
            echo "百灵鸟儿放声歌";
        }
    }
}

//Bird::sing();       //Fatal error: Class 'Bird' not found
test();
Bird::sing();       //百灵鸟儿放声歌