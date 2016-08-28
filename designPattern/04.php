<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-07 22:35:17
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-07 23:09:46
 */

//共同接口
interface db{
    //连接 数据库
    function conn();
}

interface Factory{
    function createDB();
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

class mysqlFactory implements Factory{
    public function createDB(){
        return new dbmysql();
    }
}
class sqliteFactory implements Factory{
    public function createDB(){
        return new dbsqlite();
    }
}
//服务器添加oracle类
//前面的代码不用改
class oracle implements db{
    public function conn(){
        echo '连接上了oracle';
    }
}

class oracleFactory implements Factory{
    public function createDB(){
        return new oracle;
    }
}

//==========客户端开始=========
$fact = new mysqlFactory();
$db = $fact->createDB();
$db->conn;

$fact = new sqliteFactory();
$db = $fact->createDB();
$db->conn;