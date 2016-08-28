<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-08 23:49:47
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-09 00:13:58
 */
//PHP实现观察者
//PHP5中提供观察者observer与被观察者subject的接口
class user implements Splsubject{
    public $loginnum;
    public $hobby;
    protected $observers = null;
    public function __construct($hobby){
        $this->loginnum = rand(1,10);
        $this->hobby = $hobby;
        $this->observers = new SqlObjectStorage();
    }
    public function login(){
        //操作session
        $this->notify();
    }

    public function attach(SplObserver $observer){
        $this->observers->attach($observer);
    }

    public function detach(){
        $this->observers->detach($observer);
    }

    public function notify(){
        $this->observers->rewind();
        while ($this->observers->valid()) {
            $observer = $this->observers->current();
            $observer->update($this);
            $this->observers->next();
        }
    }
}

class secrity implements SPLObserver{
    public function update(SplSubject $subject){
        if ($subject->lognum < 3) {
            echo "这是第".$subject->lognum."次安全登录";
        }else{
            echo "这是第".$subject->lognum."次登录异常";
        }
    }
}

class ad implements SPLObserver{
    public function update(Splsubject $subject){
        if ($subject->hobby == "sports") {
            echo "台球英锦赛门票预订";
        }else{
            echo "好好学习天天向上";
        }
    }
}

//实施观察
$user = new user('sports');
$user->attach(new secrity());
$user->attach(new ad());
$user->login();
