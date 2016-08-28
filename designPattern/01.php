<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-07 22:35:17
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-07 22:42:31
 */

class Tiger{

    public abstract function climb();
}

class XTiger extends Tiger(){
    public function climb(){
        echo '摔下来';
    }
}

class MTiger extends Tiger{

    public function climb(){
        echo '爬到树顶';
    }
}

class Cat{

    public function climb(){
        echo '飞到天上';
    }
}

class Client{
    public static function call(Tiger $animal){
        $animal->climb();
    }
}

Client::call(new XTiger);
Client::call(new MTiger);
Client::call(new Cat);


