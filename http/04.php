<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-06-11 00:19:31
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-06-11 23:48:02
 */
require('./http.class.php');
$http = new Http('http://home.verycd.com/cp.php?ac=pm&op=send&touid=0&pmid=0');
$http->setHeader('Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
');
$http->setHeader('Accept-Encoding:gzip, deflate');
$http->setHeader('Accept-Language:zh-CN,zh;q=0.8');
$http->setHeader('Cache-Control:no-cache');
$http->setHeader('Connection:keep-alive');
$http->setHeader('Cookie:uchome_auth=38a1aauBAp%2Facn0ejT2IqzekrFq8bxFo9wA70bQSfUIFyMDJW72OjNi1eTfnRUVfHz3mWXS19U%2BVFPHfZMnCLaUmCVclhA; uchome_loginuser=%E5%AD%A4%E9%9B%81%E5%B9%BD%E5%B9%BD; sid=85058c25cd9ac424d9744819cb9e72e1b8436773; member_id=11511772; member_name=%E5%AD%A4%E9%9B%81%E5%B9%BD%E5%B9%BD; mgroupId=93; pass_hash=b14c68ddcd6f421ccd15dbf4fa0c6326; rememberme=true; Hm_lvt_c7849bb40e146a37d411700cb7696e46=1465574348,1465575709,1465658327; Hm_lpvt_c7849bb40e146a37d411700cb7696e46=1465658330; uchome_sendmail=1; __utmt=1; CNZZDATA1479=cnzz_eid%3D751063473-1465571013-http%253A%252F%252Fwww.verycd.com%252F%26ntime%3D1465658319; __utma=248211998.747226071.1465575713.1465575713.1465658334.2; __utmb=248211998.2.10.1465658334; __utmc=248211998; __utmz=248211998.1465658334.2.2.utmcsr=verycd.com|utmccn=(referral)|utmcmd=referral|utmcct=/i/11511772/');
$http->setHeader('Referer:http://home.verycd.com/cp.php?ac=pm');
$http->setHeader('User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.116 UBrowser/5.6.13381.9 Safari/537.36');



$msg = array(
    'username'=>'湛蓝的云,',
    'message'=>'你好，端午快乐！',
    'refer'=>'http://home.verycd.com/space.php?do=pm&filter=newpm',
    'pmsubmit'=>'true',
    'pmsubmit_btn'=>'发送',
    'formhash'=>'a0562e69',
);
echo "ok";
file_put_contents('./res.html',$http->post($msg));
