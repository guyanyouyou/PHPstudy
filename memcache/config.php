<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-09-11 01:07:08
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-09-12 00:50:50
 */
//配置文件，配置memcached的节点信息
$_memserv = array();
$_memserv['A'] = array('host'=>'127.0.0.1','port'=>'11211');
$_memserv['B'] = array('host'=>'127.0.0.1','port'=>'11212');
$_memserv['C'] = array('host'=>'127.0.0.1','port'=>'11213');
$_memserv['D'] = array('host'=>'127.0.0.1','port'=>'11214');
$_memserv['E'] = array('host'=>'127.0.0.1','port'=>'11215');

//$_IDS = 'mod' //consistent;
$_dis = 'Consistent';