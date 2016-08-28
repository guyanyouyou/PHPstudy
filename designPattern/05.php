<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-07 23:11:31
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-08 23:49:37
 */
//单例模式
/*class single{

}

$s1 = new single();
$s2 = new single();*/

//注意：2个对象是一个的时候才全等
if ($s1 === $s2) {
    echo "是一个对象";
}else{
    echo "不是一个对象";
}

//封锁new操作
/*class single(){
    protected function __construct(){

    }
}
$s1 = new single();*/

//留个接口来new对象
/*class single{
    public static function getIns(){
        return new self();
    }
    protected function __construct(){

    }
}

$s1 = single::getIns();
$s2 = single::getIns();*/

/*//getIns先判断实例
class single{
    protected static $ins = null;
    public static function getIns(){
        if (self::$ins === null) {
            self::$ins = new self();
        }

        return new self();

    }
    protected function __construct(){

    }
}

$s1 = single::getIns();
$s2 = single::getIns();

//此时全等了，但是继承有问题

class multi extends single(){
    public function __construct(){

    }
}*/

//用final防止继承时被修改权限
/*class single{
    protected static $ins = null;
    public static function getIns(){
        if (self::$ins === null) {
            self::$ins = new self();
        }

        return new self();

    }
    //方法前加final，则方法不能被覆盖，类前加final，则类不能被继承
    final protected function __construct(){

    }
}

$s1 = single::getIns();
$s2 = clone $s2;    //继承可以，但克隆又产生了多个对象*/

//禁止克隆
class single{
    protected static $ins = null;
    public static function getIns(){
        if (self::$ins === null) {
            self::$ins = new self();
        }

        return new self();

    }
    //方法前加final，则方法不能被覆盖，类前加final，则类不能被继承
    final protected function __construct(){

    }

    //封锁clone
    final protected function __clone(){

    }
}

$s1 = single::getIns();
$s2 = clone $s2;    //继承可以，但克隆又产生了多个对象