<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-15 00:19:30
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-15 00:31:31
 */
interface Math{
    public function calc($op1,$op2);
}

class MathAdd implements Math{
    public function calc($op1,$op2){
        return $op1+$op2;
    }
}
class MathSub implements Math{
    public function calc($op1,$op2){
        return $op1-$op2;
    }
}
class MathMul implements Math{
    public function calc($op1,$op2){
        return $op1*$op2;
    }
}
class MathDiv implements Math{
    public function calc($op1,$op2){
        return $op1/$op2;
    }
}

//传来OP，根据OP，制造不同对象，并且调用
//if($_POST['op'])
//
//封装一个虚拟计算器
//
class CMath{
    protected $calc = null;

    public function __construct($type){
        $calc = 'Math'.$type;
        $this->calc = new $calc();
    }

    public function calc($op1,$op2){
        return $this->calc->cale($op1,$op2);
    }
}

$type = $_POST['op'];
$cmath = new CMath($type);
echo $cmath->calc($_POST['op1'],$_POST['op2']);