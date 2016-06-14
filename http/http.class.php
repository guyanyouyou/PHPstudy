<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-06-04 22:11:45
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-06-12 23:31:02
 */
/*http请求类的接口*/
interface Proto{
    //连接url
    function conn($url);

    //发送get查询
    function get();

    //发送post查询
    function post($body);

    //关闭连接
    function close();
}

class Http implements Proto{
    const CRLF = "\r\n";
    protected $errno = -1;
    protected $errstr = '';
    protected $line = array();
    protected $header = array();
    protected $body = array();
    protected $version = 'HTTP/1.1';
    protected $fh = null;
    protected $url = null;

    protected $response ='';

    public function __construct($url){
        $this->conn($url);
        $this->setHeader('Host: '.$this->url['host']);
    }
    //此方法负责写请求行
    protected function setLine($method){
        $this->line[0] = $method.' '.$this->url['path'].'?'.$this->url['query'].' '.$this->version;
    }
    //此方法负责写头信息
    public function setHeader($headerline){
        $this->header[] = $headerline;
    }
    //此方法负责写主题信息
    protected function setBody($arr){
        $this->body = array(http_build_query(array_merge($this->body, $arr)));
    }
    //连接url
    function conn($url){
        $this->url = parse_url($url);
        //判断端口
        $this->url['port'] = isset($this->url['port'])?$this->url['port']:80;
        //判断query
        $this->url['query'] = isset($this->url['query'])?$this->url['query']:'';
        $this->fh = fsockopen($this->url['host'],$this->url['port'],$this->errno,$this->errstr,30);
        //echo $this->errno;
        //echo $this->errstr;
    }

    //构造get查询
    function get(){
        $this->setLine('GET');
        $this->request();
        return $this->response;
    }

    //构造post查询
    function post($body){
        $this->setLine('POST');
        //设计content-type
        $this->setHeader('Content-type:application/x-www-form-urlencoded');
        //设置主题主体信息，比get不一样的地方
        $this->setBody($body);
        //计算content-length
        $this->setHeader('Content-length:'.strlen($this->body[0]));
        $this->request();
        return $this->response;
    }

    //真正请求
    function request(){
        //把请求行，头信息，实体信息 放在一起，便于拼接
        $req = array_merge($this->line, $this->header,array(''),$this->body,array(''));
         //print_r($req);die();
        $req = implode(self::CRLF, $req);
        //echo $req;
        fwrite($this->fh,$req);
        while (!feof($this->fh)) {
            $this->response .= fread($this->fh,1024);
        }
        //echo $this->response;
        $this->close();
        //return $this->response;
    }
    //关闭连接
    function close(){
        fclose($this->fh);
    }
}

/*$url = 'http://news.163.com/16/0606/19/BOTAD0BV0001124J.html';
$http = new Http($url);
var_dump($http->get());*/

/*$url = 'http://liangyue.net.cn/0523';
$str = str_shuffle('abcdefghijklmnopqrstuvwxyz');
$title = substr($str, 0, 5);
$conn = substr($str, 6, 8);
$http = new Http($url);
var_dump($http->post(array('tit'=>$title,'con'=>$conn,'sumit'=>'留言')));
*/