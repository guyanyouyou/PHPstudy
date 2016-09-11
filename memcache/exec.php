<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-09-11 02:02:21
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-09-12 00:58:07
 */
/**
 * 模拟减少一台服务器，并请求
 */
set_time_limit(0);

require('./config.php');
require('./hash.php');


$mem = new Memcache();  //穿件memecached客户端的操作类

$diser = new $_dis();

//循环的添加服务器
foreach ($_memserv as $k => $s) {
    $diser->addNode($k);
}

//模拟少一台服务器
$diser->delNode('D');

//模拟hits
for ($i=9999; $i < 100000; $i++) {
    $i = sprintf('%04d',$i % 10000 + 1);    //让key落在[0,10000]之间
    $key = 'key'.$i;
    $serv = $_memserv[$diser->lookup($key)];  //根据key计算key所属的节点
    $mem->pconnect($serv['host'],$serv['port'],2);
    if(!$mem->get($key)){
        //要是节点中，无此缓存，则添加之
        $mem->add($key,'value'.$i,0,0);
        $mem->close();
        usleep(3000);
    }
}