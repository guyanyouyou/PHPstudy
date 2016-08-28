<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-10 23:44:50
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-10 23:56:16
 */
header('content-type:text/html;charset=utf8');

$lev = $_POST['jubao'] + 0;
class board{
    public function process(){
        echo "版主删帖";
    }
}

class admin{
    public function process(){
        echo "管理员封号"
    }
}

class police{
    public function process(){
        echo "抓起来";
    }
}

//面向过程来解决举报问题
if ($lev == 1) {
    $judge = new board();
    $judge->process();
}elseif ($lev == 2) {
    $judge = new admin();
    $judge->process();
}else{
    $judge = new police();
    $judge->process();
}