<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-05-30 00:04:28
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-05-30 00:11:52
 */
error_reporting(0);
class mysql{
    protected $conn = NULL;
    public function __construct(){
        $this->conn = mysql_connect('localhost','root','')
    }
    if (! $this->conn) {
        //发卫星报告
        //在PHP，卫星是规定的一种对象
        //哪个类的对象：exception类的对象
        //new Exception('错误原因','错误代码');
        $e = new Exception('漏油了',9);
        throw $e;   //throw 抛出/扔出
    }
}
//内部扔了异常，外部没人catch，并处理
//这时，要报fetal error的
$mysql = new mysql();
