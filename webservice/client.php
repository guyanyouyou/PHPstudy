<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-06-15 23:32:08
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-06-15 23:33:57
 */

$soapclient = new soapclient('http://localhost/oop/PHPstudy/webservice/wsdl.xml');
print_r($soapclient->__getFunctions());