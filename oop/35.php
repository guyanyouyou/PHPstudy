<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-04 02:25:41
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-04-04 02:30:44
 */
/**
 * __call 在tp中的应用
 */

class Action{
    public function bj(){
        echo "bj天气预报";
    }
    public function __call($method,$args){
        echo $method,"天气预报";
    }
}
$action = new Action();
$method = $_GET['method'];
if ($method) {
    $action->$method();
}
