<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-08-15 00:31:40
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-08-15 00:40:36
 */
//装饰器模式 decorator
//
class Article{

    protected $content;

    public function __construct($content){
        $this->content = $content;
    }

    public function decorator(){
        return $this->content;
    }
}

$art = new Article('好好学习');
echo $art->decorator();

//文章需要 小编加摘要
class BianArticle extends Article{
    public function summary(){
        return $this->content.'小编加了摘要';
    }
}

$art = new BianArticle('好好学习');
echo $art->decorator();

//SEO人员加个descript
class SEOArticle extends BianArticle{
    public function seo(){
        return $this->content.'SEO加了descript';
    }
}

//广告部加个广告
class AdArticle extends SEOArticle{
    public function seo(){
        return $this->content.'AD加了广告';
    }
}
