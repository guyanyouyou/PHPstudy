<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-05 23:21:21
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-04-05 23:46:21
 */
/**
 * 抽象类的意义：
 * facebook 多国语言欢迎页面
 * user登陆，有一个c字段，是其国家
 * 当各国人登陆时，看到各国语言的欢迎界面
 * 我们可以用面向过程的来做
 * if($c == 'china'){
 *     echo "你好，非死不可";
 * }elseif($c == 'english'){
 *     echo 'hi:welcome';
 * }elseif($c == 'japan'){
 *     echo '搜打死内';
 * }
 * 反思：当facebook进入泰国市场时，
 * 增加 else if 扩展性很差
 */
$c = 'english';
if($c == 'china'){
     echo "你好，非死不可";
 }elseif($c == 'english'){
     echo 'hi:welcome';
 }elseif($c == 'japan'){
     echo '搜打死内';
 }

 //=====用面向对象来做======
 /**
  * 让美国小组/中国开发组/思密达开发组 来开发welcome类
  * 争执不下：echo到底该中？日？韩？
  * 说：干脆在wel方法里再判断一下？
  */
 abstract class Welcome{
    public abstract function wel();
 }
//这是首页的controller开发者
/* $wel = new Welcome();
 $wel->wel();*/
 /**
  * 说：你们别争执了，我只知道，我要调用wel方法，就是打招呼
  * 你们显示什么语言和我无关
  */
 /**
  * 经理说话：
  * welcome谁也不许动，各国开发小组开发自己的招呼类
  * 另：为了首页的controller开发者便于调用，
  * 统一继承自welcome类
  */
class china extends Welcome{
    public function wel(){
        echo "你好，非死不可<br>";
    }
}
class english extends Welcome{
    public function wel(){
        echo "hi:welcome<br>";
    }
}
class japan extends Welcome{
    public function wel(){
        echo "搜打死内<br>";
    }
}
//再看首页的controller开发者
$c = 'english';
$wel = new $c();
$wel->wel();

/**
 * 以后新增了泰国语，首页的开发者，根本无需改动
 * 只需要增加一个泰国的招呼类就可以了
 * 所以有一些面向对象的介绍中，说面向对象的一个特点：可插拔特性
 */
