<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-04 01:37:02
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-04-04 02:16:29
 */
/**
 * __call()
 * __callStatic();
 */

class Human{
    public function hello(){
        echo "hello<br>";
    }
    public static function __callStatic($method,$arguments){
        echo "有对象想调用一个不存在或无权访问的静态",$method,'方法<br>';
        echo "还传了参数<br>";
        print_r($arguments);
    }
    public function __call($method,$arguments){
        echo "有对象想调用",$method,'方法<br>';
        echo "还传了参数<br>";
        print_r($arguments);
    }

    private function t(){
        echo "t";
    }

}
$lisi = new Human();
$lisi->say(1,2,3);   //Call to undefined method Human::say()
$lisi->hello();
$lisi->t('a','b','c');
/**
 * __call是调用不可见（不存在或无权限）的方法时，自动调用
 * $lisi->say(1,2,3)----没有say()方法---->__call('say',array(1,2,3))
 */
Human::cry('痛哭','号哭');
/**
 * __callStatic是调用不可见（不存在或无权限）的静态方法时，自动调用
 * Human::cry('痛哭','号哭')----没有cry()方法---->Human::__callStatic('cry',array('痛哭','号哭'))
 */

/**
 * __callStatic在editplus中和其他系统函数颜色不一致
 * 答：这个方法是PHP5.3里才添加的，比较新
 * 可能老版本的editplus的语法文件里，没有他
 */