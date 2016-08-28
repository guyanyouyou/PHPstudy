<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-07 22:35:17
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-07 22:52:33
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

$db = new dbmysql();
$db->conn();

$db = new dbsqlite();
$db->conn();