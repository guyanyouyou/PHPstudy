<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-09-11 01:40:02
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-09-12 00:37:44
 */
/**
 * 为各 memcached 节点，各充入1000条数据
 * 步骤：引入配置文件，循环各节点，连接并填入数据
 */
set_time_limit(0);
require('./config.php');
require('./hash.php');

$mem = new Memcache();

$diser = new $_dis();   //分布式算法

//循环的添加服务器
foreach ($_memserv as $k => $s) {
    $diser->addNode($k);
}


for ($i=0; $i < 10000; $i++) {
    $i = sprintf('%04d',$i);
    $key = 'key'.$i;
    $value = 'value'.$i;
    $serv = $_memserv[$diser->lookup($key)];
    $mem->pconnect($serv['host'],$serv['port'],2);
    $mem->add($key,$value,0,0);
    $mem->close();
    usleep(3000);
}

echo 'full';
/*foreach ($_memserv as $k => $s) {
    $mem->connect($s['host'],$s['port'],2);
    for ($i=1; $i <= 1000; $i++) {
        $mem->add('key'.$i,'value'.$i,0,0);
    }
    echo $k,'号服务器数据初始化完毕<br>';
}*/