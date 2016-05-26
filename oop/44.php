<?php 
//=======笔记部分=======
/*接口的具体语法：
0.以人类为例，class Human是人的草图
而接口是零件
可以用多种零件组合出一种新物种来
1.接口本身是抽象的，内部声明的方法，默认也是抽象的
不用加abstract
2.一个类可以一次性实现多个接口
语法用implements实现（把我这几个功能实现了）
class ClassName implements interface1,interface2,interface3{

}
然后把接口的功能给实现了
3.接口也可以继承，用extends
4.接口是一堆方法的说明，不能加属性
5.接口就是供组装成类用的，封闭起来没有意义
*/


interface animal{
    public function eat();
}

interface monkey extends animal(){
    public function run();
    public function cry();
}

interface wisdom{
    public function think();
}

interface bird extends animal{
    public function think();
}


//下面有误，monkey继承的animal接口，因此必须要把eat实现
/*class Human implements monkey,wisdom{
    
   public function run(){
        echo "跑";
   }
   public function cry(){
        echo "哭";
   }
   public function think(){
        echo "想";
   }
}*/


class Human implements monkey,wisdom{
    public function eat(){
        echo "吃";
    }
   public function run(){
        echo "跑";
   }
   public function cry(){
        echo "哭";
   }
   public function think(){
        echo "想";
   }
}
 ?>
