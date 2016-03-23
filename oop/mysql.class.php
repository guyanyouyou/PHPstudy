<?php 




/**
*  目标：
连接数据库
 发送查询
 对于select型，返回查询数据
 关闭mysql连接
*/
class Mysql{
    private $host;
    private $usesr;
    private $pwd;
    private $dbName;
    private $charset;

    private $conn = null;   //保存连接的资源

    function __construct(argument){
        //应该是在构造方法里，读取配置文件
        //然后根据配置文件来读取私有属性
        //此处还没有配置文件，就直接赋值
        $this->host = 'localhsot';
        $this->usesr = 'root';
        $this->pwd = '111';
        $this->dbName = 'test';
        //连接
        $this->connect($this->host,$this->user,$this->pwd);
        //切换哭
        $this->switchDb($this->dbName);
        //设置字符集
        $this->setChar($this->charset);
    }

    //负责连接
    private function connect($h,$u,$p){
        $conn = mysql_connect($h,$u,$p);
        $this->conn = $conn;
        return $conn;
    }

    //负责切换数据库，网站大的时候，可能用到不止一个库
    public function switchDb($db){
        $sql = 'user'.$db;
        $this->query($sql);
    }
    //
    public function setChar($char){
        $sql = 'set names '.$char;
        $this->query($sql);
    }
    //负责发送sql查询
    public function query($sql){
        return mysql_query($sql,$this->conn);
    }

    //负责获取多行多列的查询结果
    public function getAll(){

    }
}

$mysql = new Mysql();

$sql = "insert into stu values (20,'object','998')";
if ($mysql->query($sql)) {
    echo "query成功";
}else{
    echo "失败";
 ?>}
