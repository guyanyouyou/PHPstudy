<?php
/**
 * @Author: anchen
 * @Date:   2016-03-20 16:50:21
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-03-20 19:06:49
 */
/**
 * 构造函数 __construct(); 注意 前面是两个下划线
 * 构造函数的作用时机：
 * 每当new一个对象，就会自动新new出来对象发挥作用
 *
 * new ClassName($args);
 * $args参数原样传给构造方法
 * 然后构造方法，用参数来影响新创建的对象
 *
 * 当然：new ClassName()也可以不传参
 * 但注意：$args要与构造方法里的参数一致
 *
 */
/*class Human{
    public function __construct(){
        echo "紫薇星下凡了";
    }

    public $name = null;
    public $gender = null;
}

$a = new Human();*/

//构造函数的传参，并影响对象
/*class Human{
    public function __construct(){
        $this->name = '李四';
        $this->gender = '女';
    }

    public $name = null;
    public $gender = null;
}

$a = new Human();
$b = new Human();
$c = new Human();

echo $a->name.'<br>';
echo $b->name.'<br>';
echo $c->name.'<br>';*/

class Human{
    public function __construct($name,$gender){
        $this->name = $name;
        $this->gender = $gender;
    }

    public $name = null;
    public $gender = null;
}

$a = new Human('张三','男');
$b = new Human('李四','女');
$c = new Human('王五','男');

echo $a->name.'<br>';
echo $b->name.'<br>';
echo $c->name.'<br>';