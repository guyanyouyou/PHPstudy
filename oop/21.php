<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-26 18:34:22
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-26 18:39:02
 */

class Human{
    public function cry(){
        echo "555<br>";
    }
}

class Stu extends Human{
    protected function cry(){
        echo '5959<br>';
    }
}

$student = new Stu();
$student->cry();

/**
 *  Fatal error: Access level to Stu::cry() must be public (as in class Human)
 *  子类的cry比父类的cry方法，权限要严格
 *  这不行，继承时的权限只能越来越宽松或者不变，不能越来越严格
 */