<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-27 15:56:32
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-27 16:22:59
 */
/**
 * 静态方法
 * static public/protected/private t(){
 *
 * }
 *
 * 普通方法，存在于类内的，只有一份
 * 静态方法，也是存放于类内，只有一份
 *
 * 区别在于：
 * 普通方法需要对象去调动，需要绑定$this
 * 即，普通方法，必须要有对象，用对象调动
 * 而静态方法，不属于哪个对象，因此不需要去绑定$this
 * 即，静态方法，通过类名就可以调动
 *
 */
class Human {
    static public function cry(){
        echo "5555",'<br>';
    }

    public function eat(){
        echo "吃饭<br>";
    }

    public function intro(){
        echo $this->name,'<br>';
    }
}

Human::cry();
//Human::eat();
//eat方法时一个非静态方法，应由对象来调用，但是，调用了，也没出问题
//Strict standards: Non-static method Human::eat() should not be called statically
//但从逻辑来理解,如果用类名静态调用非静态方法
//比如intro()
//那么：$this到底指哪个对象
Human::who();
//Fatal error: Using $this when not in object context

//如上分析，其实非静态方法，是不能由类名静态调用的
//但是：PHP中的面向对象检测的并不养儿，
//只要该方法没有$this,就会转化静态方法来调用
//因此，cry()可以调用
//
//但是在PHP5.3的strict级别下，或者PHP5.4的默认级别
//都已经对类名::非静态方法做了提示

//动访问静
$lisi = new Human();
$lisi->cry();

/**
 * 类->访问->静态方法
 * 类->访问->动态方法 方法内没有this的情况下可以，但严重不支持，逻辑上行不通
 *
 * 对象->访问动态方法 可以
 * 对象->访问静态方法 可以
 *
 */