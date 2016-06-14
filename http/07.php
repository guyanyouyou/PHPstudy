<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-06-12 22:20:39
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-06-12 23:31:33
 */
require './http.class.php';
$http = new Http('http://192.168.16.100/oop/PHPstudy/http/test.jpg');
$http->setHeader('Referer:http://localhost');
$res = $http->get();
file_put_contents('a.jpg',substr(strstr($res,"\r\n\r\n"),4));