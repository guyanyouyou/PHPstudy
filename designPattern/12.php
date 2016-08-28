<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-23 23:22:35
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-23 23:35:07
 */
//适配器模式
//服务器端代码
class tianqi{
    public static function show(){
        $today = array('tep'=>28,'wind'=>7,'sun'=>'sunny');
        return serialize($today);
    }
}

//增加一个适配器
class AdapterTianQi extends tianqi{
    public static function show(){
        $today = parent::show();
        $today = unserialize($today);
        $today = json_encode($today);
        return $today;
    }
}
//客户端调用
$tq = unserialize(tianqi::show());
echo '温度:',$tq['tep'],'<br>';
echo '风力:',$tq['wind'],'<br>';
echo 'sun:',$tq['sun'],'<br>';

//来了一起手机上的java客户端，不认识PHP的串行化后的字符串，怎么办？
//把服务器端代码改了？==旧的客户端又会受影响？

//java,python再来调用，通过适配器调用
$tq = AdapterTianQi::show();
$tq = json_encode($tq);
