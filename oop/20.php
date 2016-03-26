<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-03-26 18:19:24
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-03-26 18:33:29
 */
/**
 * 子类继承父类的属性/方法，可以修改或增加
 */

class sixty{
    protected $wine = '1斤';

    public function play(){
        echo "谈理想<br>";
    }
}

class nine extends sixty{
    public function play(){
        echo "玩网游，宅！<br>";
    }

    public function momo(){
        echo "妹子，认识一下<br>";
    }
    public function showW(){
        echo $this->wine,"<br>";
    }
}

$s9 = new nine();
echo $s9->wine,"<br>";  //父类有的，继承过来
$s9->play();    //继承过来，可以修改/覆盖
$s9->momo();    //父类没有，可以添加

/**
 * 上面所说的继承过来的大环境是指
 * public/protected
 *
 */