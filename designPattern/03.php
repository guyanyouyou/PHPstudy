<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-07 22:35:17
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-07 23:01:35
 */

//共同接口
interface db{
    //连接 数据库
    function conn();
}

//服务端开发(不知道将被谁调用)
class dbmysql implements db(){
    public function conn(){
        echo '连上了mysql';
    }
}

class dbsqlite implements db(){
    public function conn(){
        echo 'sqlite';
    }
}

//客户端，看不到dbmysql,dbsqllite内部细节
//只知道，上两个类实现了db接口

/**
 * 减淡工厂
 */
class Factory{
    public static function createDB($type){
        if ($type == 'mysql') {
            return new dbmysql();
        }elseif ($type == 'sqlite') {
            return new dbsqlite();
        }else{
            throw new Exception("Error db type", 1);
        }
    }
}

//客户端现在不知道服务端到底有哪些类名了
//只知道对方开放了一个Factory::createDB方法
//方法允许传递数据库名称

$mysql = Factory::createDB('mysql');
$mysql::conn();

$sqlite = Factory::createDB('sqlite');
$sqlite::conn();

//如果新增oracle类型，怎么办？
//服务端修改Factory的内容(在java，c++中，改后还得再编译)
//在面向对象设计法则中，重要的开闭原则————对于修改是封闭，对于扩展是开发的