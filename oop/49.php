<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-05-29 22:10:57
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-05-30 00:00:43
 */
/**
 * 异常
 */
error_reporting(0);
class mysql{
    protected $conn = NULL;
    public function __construct(){
        $this->conn = mysql_connect('localhost','root','')
    }
    if (! $this->conn) {
/*        return false;
    }else{
        return true;*/
        //发卫星报告
        //在PHP，卫星是规定的一种对象
        //哪个类的对象：exception类的对象
        //new Exception('错误原因','错误代码');
        $e = new Exception('漏油了',9);
        throw $e;   //throw 抛出/扔出
    }
}


try{
    //捕捉错误信息
    $mysql = new mysql();   //返回mysql对象，并且自动连上数据库
}catch(Exception $e){
    echo '捕捉到错误信息:<br>';
    echo $e->getMessage(),'<br>';
    echo '错误代码'.$e->getCode(),'<br>';
    echo '错误文件'.$e->getFile(),'<br>';
    echo '错误行'.$e->getLine(),'<br>';

}

/**
 * 疑问：
 * 怎么判断连接成功了没有？
 * 答：返回对象后，打印对象的$conn属性来判断
 *
 * 需要两个步骤
 * 1：new mysqli
 * 2:if($mysql->conn){
 * }
 * 思考：我们以前用函数时，都是返回一个值，用值来判断各种情况
 * 比如 返回true/false代表成功/失败
 *
 * 我们现在用返回值 还行不行
 */
print_r($mysql);
if ($mysql instanceof mysql) {
    echo '对象创建成功，大概连接成功';
}else{
    echo "对象连接失败，大概连接失败"
}