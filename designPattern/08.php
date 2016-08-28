<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-10 23:44:50
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-11 00:04:10
 */
header('content-type:text/html;charset=utf8');


class board{
    protected $power = 1;
    protected $top = 'admin';
    public function process($lev){
        if ($lev > $this->power) {
            echo "版主删帖";
        }else{
            $top = new $this->top;
            $top->process($lev);
        }

    }
}

class admin{
    protected $power = 2;
    protected $top = 'police';
    public function process($lev){
        if ($lev > $this->power) {
            echo "管理员封号"
        }else{
           $top = new $this->top;
            $top->process($lev);
        }
    }
}

class police{
    protected $power;
    protected $top = null;
    public function process($lev){
        echo "抓起来";
    }
}

//责任链模式来解决举报问题
$lev = $_POST['jubao'] + 0;

$judge = new board();
$judge->process($lev);
