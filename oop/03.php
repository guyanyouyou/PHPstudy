<?php
/**
 * @Author: anchen
 * @Date:   2016-03-20 16:00:35
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-03-20 16:06:34
 */
//方法的注意点
function t(){
    echo 't';
}
//这个t是我的自定义函数
t();
/*//我再定义一个t函数
function t(){
    echo 'tt';
}
t();
php中函数不能重复定义
这点和js不一样
*/

/**
 * 但是，类中的方法，可以理解‘包在类范围内的函数’
 * 和全局的函数不是一回事
 * 因此，可以重名
 */

class Clock{
    public function time(){
        echo '现在的时间戳是aaaa';
    }
}
$c = new Clock();
$c->time();