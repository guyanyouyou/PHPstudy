<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-21 23:33:21
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-21 23:41:57
 */

/**
 * 封装在方法上的体现
 */

class Human{
    private $money = 1000;
    private $bank = 2000;

    private function getBank($num){
        $this->bank -= $num;
        return $num;
    }

    public function send($much){
        if ($much >$this->money+$this->bank){
            return false;
        }elseif ($much <= 1000) {
            $this->money -= $much;
            return $much;
        }elseif($much <= $this->money+$this->bank){
            $num = $much->$this->money; //算算要从银行取多少钱
            $this->money += $this->getBank($num)    //从银行取出钱加到现金里

            $this->money -= $much;  //再把钱借给朋友
            return $much;
        }else{  //最后，实在借不了那么多
            return false;
        }
    }

    public function showMoney(){
        return $this->money;
    }

    public function showBank(){
        return $this->bank;
    }
}

$lisi = new Human();
$m = $lisi->send(300);
if ($m) {
    echo "借了".$m."元","<br>";   
    echo "还剩下",$lisi->showMoney(),"元","<br>"; 
    echo "银行还有".$this->showBank."元<br>";
}

//再借2000元
$m = $lisi->send(2000);
if ($m) {
    echo "借了".$m."元","<br>";   
    echo "还剩下",$lisi->showMoney(),"元","<br>"; 
    echo "银行还有".$this->showBank."元<br>";
}

//再借1000元
$m = $lisi->send(1000);
if ($m) {
    echo "成功";
}else{
    print_r($m);
}

//在上个例子中，
//借钱者，只知道，借成功了，还是借失败了

//至于，如果借成功了，lisi是怎样把钱凑齐的
//借钱者不会知道lisi也许跑了趟银行，再把钱凑齐

//就像听课的不知道老师是怎么备课的
//
//对于一个对象，对外界开房一个接口
//调用接口时，内部进行的操作，不需要外界知道
//隐藏了内部的一些实现细节
//这是对方法的封装

//生活中的封装很常见：
//比如电视机
//我们开电源，一个动作
//[隐藏的内部动作 显像管 无线电信息 调频等等]

//比如洗衣机
//扔衣服 通电
//[自动注水、洗、漂、脱水]