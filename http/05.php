<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-06-11 01:49:27
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-06-11 01:52:00
 */
setcookie('user', 'zhangsan');
echo "服务器给你的编号是",$_COOKIE['user'];