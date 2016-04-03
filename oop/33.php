<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-04-03 18:27:12
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-04-04 01:32:25
 */
/**
 * 用TP做了一个用户注册
 *
 * 按以前的思路
 * 把POSt来的数据，凭借，sqll，然后查询
 *
 * 但是TP中的做法，有点奇怪
 * 他是把收到的信息
 * 赋给了一个对象的属性
 *
 * 然后对象->add()方法，就写入到数据库了
 * 很方便
 *
 * 思考：
 * 1：userModel就有username属性供你去赋值么？
 * 2：如果$userModel->xxx属性是保护的，
 * 而我的表，又有一个字段，恰好也叫xxx，
 * 那么，我自然是$user->xxx = $_POST['xxx'];
 * 这不就出错了么？
 * 3:还有一个问题：userModel有一些属性，很正常，比如有5个属性
 * a,b,c,d,e
 * 我在注册时，又动态设置了属性，f,g,h,i
 * 疑问：在拼接sql时，要把a,b,b,c,e忽略掉才行
 * 答：用魔术方法来解决
 *
 * 通过__set()方法
 * 把属性的设置---》都放到数组里
 * 处理时，专门处理这个数组就可以了
 * 这样，就不会和其他属性相冲突了
 */

class UserModel{
    protected $email = 'user@163.com';
    protected $data = array();

    public function __set($k,$v){
        //$this->$k = $v; //并没有真正赋值成自己的属性
        $this->data[$k] = $v;
    }

    public function __get($p){
        return isset($this->data[$p])?$this->data[$p]:NULL;
    }

    public function __unset($p){
        unset($this->data[$p]);
    }

    public function __isset($p){
        return isset($this->data[$p]);
    }
    public function add(){
        $sql = 'insert into table(';
        $sql .= implode(',',array_keys($this->data));
        $sql .= ') values (\'';
        $sql .= implode(',',array_values($this->data));
    }
}
$userModel = new UserModel();
print_r($userModel);
$userModel->username = 'lisi';
$userModel->email = 'lisi@126.com'; //显然此处有问题
print_r($userModel);
unset($userModel->email);
print_r($userModel);

