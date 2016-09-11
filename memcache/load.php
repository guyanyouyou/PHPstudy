<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-09-11 01:53:28
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-09-12 00:43:52
 */
/**
 * 统计各节点的平均命中率
 */
require('./config.php');
$mem = new Memcache();
$gets = 0;
$hits = 0;
foreach ($_memserv as $k => $s) {
    $mem->connect($s['host'],$s['port'],2);
    $res = $mem->getStats();

    $gets += $res['cmd_get'];
    $hits += $res['get_hits'];
    $mem->close();
}
$rate = 1;
if ($gets > 0) {
    $rate = $hits/$gets;
}
echo $rate;