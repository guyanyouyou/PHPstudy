<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-04 22:30:22
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-04-04 22:40:30
 */
/**
 * 魔术常量
 * 1.无法手动修改他的值，所以叫常量
 * 2.但是值又是随环境变动的，所以叫魔术
 *
 * --魔术常量
 * __FILE__返回当前文件的路径
 * 在框架开发或者是网站初始化脚本中，用来计算网站的根目录
 *
 * __LINE__ 返回当前的行号
 * 在框架中，可以用来debug时，记录错误信息
 *
 * __CLASS__ 返回当前的类名
 *
 * __METHOD__ 返回当前的方法名
 */
echo "当前正在运行的是",__FILE__,"文件<br>";
echo "当前在",__DIR__,"目录下<br>";
echo "hi,我在",__LINE__,"行<br>";
echo "hello,我在",__LINE__,"行<br>";
echo "hehe,我在",__LINE__,"行<br>";

class Human{
    public static function t(){
        echo "你正在运行",__CLASS__,"类<br>";
        echo "下的",__METHOD__,"方法<br>";
    }
}
Human::t();