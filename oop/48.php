<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-05-29 15:58:36
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-05-29 16:09:08
 */
/**
 * 自动加载只能用__autoload函数么？
 * 答：不是的，其实也可以指定一个函数
 *
 * 比如 我们就用zidongjiazai()函数
 * 注意：要通知系统，让系统知道--我自己写了一个自动加载函数，用这个！
 * 怎么通知：用系统函数spl_autoload_register
 */
//下面这句话，是把zidongjiazai函数注册成“自动加载函数”
spl_autoload_register('zidongjiazai');
function zidongjiazai($c){
    require('./'.$c.'.php');
}
$lisi = new HumanModel();
$lisi->t();

/**
 * __autoload是一个函数
 * 我能自己注册一个自动加载函数
 * 能否注册类的一个静态方法 当自动加载函数？
 * tp类是这样做的
 */