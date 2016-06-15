<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-06-15 23:27:36
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-06-15 23:30:32
 */
function sum($str){
    return 'webserverce'.$str;
}
$server = new soapserver('./wsdl.xml');     //按照wsdl的说明，来创建服务器
$server->addFunction('sum');
$server->handle();
