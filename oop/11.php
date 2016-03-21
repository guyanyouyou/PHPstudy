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
    //private $car = 5000;

    private function getBank($num){
        $this->bank -= $num;
        return $num;
    }

    public function send($much){
        if ($much <= 1000) {
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
}