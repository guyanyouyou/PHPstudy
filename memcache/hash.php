<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-09-11 01:12:57
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-09-12 00:29:27
 */

//一致性hash的PHP实现
//需要一个把字符串转成整数的功能
interface hash{
    public function _hash($str);
}

interface distrubution{
    public function lookup($key);
}

class Moder implements hash,distrubution{
    protected $_nodes = array();    //节点数组
    protected $_cnt = 0;    //节点个数

    public function addNode($node){
        if(in_array($node,$this->_nodes)){
            return true;
        }
        $this->_nodes[] = $node;
        $this->_cnt += 1;
    }

    public function delNode($node){
        if(!in_array($node,$this->_nodes)){
            return true;
        }
        $key = array_search($node,$this->_nodes);
        unset($this->_nodes[$key]);
        $this->_nodes = array_merge($this->_nodes);
        $this->_cnt -= 1;
    }

    public function lookup($key){
        $mode = $this->_hash($key) % $this->_cnt;
        return $this->_nodes[$mode];
    }

    public function _hash($str){
        return sprintf('%u',crc32($str));   //把字符串转成32位无符号整数
    }
}

class Consistent implements hash,distrubution{
    protected $_nodes = array();
    protected $_position = array();
    protected $_mul = 64;

    public function _hash($str){
        return sprintf('%u',crc32($str));   //把字符串转成32位无符号整数
    }

    //核心功能
    public function lookup($key){
        $point = $this->_hash($key);
        $node = current($this->_position);     //先取圆环上最小的一个节点，当成结果
        foreach ($this->_position as $k => $v) {
            if ($point <= $k) {
                $node = $v;
                break;
            }
        }
        return $node;
    }

    public function addNode($node){
        for ($i=0; $i < $this->_mul; $i++) {
            $this->_position[$this->_hash($node.'-'.$i)] = $node;
            //$this->_nodes[$node][] = $this->hash($node.'-'.$i);
        }
        //$this->_nodes[$this->_hash($node)] = $node;   //如array(13亿->true)
        $this->_sortPosition();
    }

    //循环所有的虚节点位置，谁的值等于指定的真实节点，就把他删掉
    public function delNode($node){
        foreach ($this->_position as $k => $v) {
            if ($v == $node) {
                unset($this->_position[$k]);
            }
        }
    }

    protected function _sortPosition(){
        ksort($this->_position, SORT_REGULAR);
    }

    /*public function printNodes(){
        print_r($this->_nodes);
    }*/

    public function printPosition(){
        print_r($this->_position);
    }

}

/*$con = new Moder();
$con->addNode('a');
$con->addNode('b');
$con->addNode('c');

echo '所有的服务器如下：<br>';
//$con->printPosition();
echo '<br>';
echo '当前的键计算的hash落点是：<br>',$con->_hash('title');
echo '<br>';
echo $con->lookup('title');*/

