<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-06-15 23:04:24
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-06-15 23:18:45
 */
//利用soapClient来请求webservice服务器
//客户端通过wsdl，即可以了解webservice的可调用方法及参数细节
$soapclient = new soapclient('http://ws.webxml.com.cn/WebServices/MobileCodeWS.asmx?WSDL');
//print_r($soapclient->__getFunctions()); //得到webservice可以调用的方法
print_r($soapclient->getMobileCodeinfo(array('mobileCode'=>'15229270701')));
$soapclient->__getLastRequest();