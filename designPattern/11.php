<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-22 23:29:21
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-22 23:47:53
 */
//装饰器模式做文章修饰功能
class BaseArt{
    protected $content;
    protected $art =null;

    public function __construct(){
        return $this->content;
    }

    public function decorator(){
        return $this->content;
    }
}

//编辑文章摘要
class BianArt extends BaseArt{
    public function __construct(BaseArt $art){
        $this->art = $art;
        $this->decorator();
    }
    public function decorator(){
        $this->content = $this->art->decorator()."小编摘要";
        //$this->art->content .= "小编摘要";
        //return parent::decorator().'小编加上文章摘要<br/>';
    }
}

//编辑SEO关键词
class SEOArt extends BaseArt{
    public function __construct(BaseArt $art){
        $this->art = $art;
        $this->decorator();
    }
    public function decorator(){
        return $this->content = $this->art->decorator()."SEO关键词";
        //return parent::decorator().'加上SEO关键词<br/>';
    }
}
// $BA = new BaseArt('天天向上');
// echo $BA->decorator();

// $x = new BianArt('好好学习');
// echo $x->decorator();
//
$b = new BianArt(new BaseArt('天天向上'));
echo $b->decorator();