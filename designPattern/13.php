<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-23 23:40:22
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-23 23:49:19
 */
//桥接模式 bridge
//论坛给用户发信息，可以是站内信息，email，手机
interface msg{
    public function send($to,$content);
}

class zn implements msg{
    public function send($to,$content){
        echo '站内信给',$to,'内容:',$contetnt;
    }
}

class email implements msg{
    public function send($to,$content){
        echo 'email给',$to,'内容:',$contetnt;
    }
}

class sms implements msg{
    public function send($to,$content){
        echo '短信给',$to,'内容:',$contetnt;
    }
}

//内容也分普通，加急，特急
/*class zncommon extends msg
class znwarn extends msg
class zndanger extends msg

class emailcommon extends msg
class emailwarn extends msg
class emaildanger extends msg*/


// 思考：
// 信的发送方式是一个变化因素
// 信的紧急程度是一个变化因素
// 为了不修改父类，只好考虑两个因素的组合


