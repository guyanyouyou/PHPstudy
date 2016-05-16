<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-05-16 20:35:57
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-05-16 20:36:01
 */
<?php
/**
 * @Author: 孤雁幽幽
 * @Date:   2016-05-16 19:46:41
 * @Last Modified by:   孤雁幽幽
 * @Last Modified time: 2016-05-16 20:20:53
 */
/**
 * 类：是某一类事物的抽象，是某类对象的蓝图
 * 比如：女娲造人时，脑子中关于人的形象，就是人类class Human
 *
 * 如果，女娲决定造人时，同时，形象又没最终定稿时，
 * 她脑子里有哪些支离破碎的形象呢？
 *
 * 她可能会这么思考：
 * 动物：吃饭
 * 猴子：奔跑
 * 猴子：哭
 * 自己：思考
 *
 * 我造一种生物，命名为人，应该由如下功能
 * eat()
 * run()
 * cry()
 * think()
 *
 * 类如果是一种事物/动物的抽象
 * 那么接口，则是事物/动物的功能的抽象
 * 即，再把他们的功能拆成小块
 * 自由组合成新的物种
 */
interface animal{
    public function eat();
}

interface monkey{
    public function run();
    public function cry();
}

interface wisdom{
    public function think();
}

interface bird{
    public function fly();
}

/**
 * 如上，我们把每个类中的这种实现的功能拆出来
 * 分析：如果有一种新生物，实现了eat() + run() + cry() + think(),这种智慧生物叫做人
 */

/*class Human implements animal,monkey,wisdom{
    //Fatal error: Class Human contains 4 abstract methods and must therefore be declared abstract or implement the remaining methods (animal::eat, monkey::run, monkey::cry, ...)
    //竟然说有4个抽象方法
    //因为接口的方法，本身就是抽象，不要有方法体，也不比家abstract
}*/

class Human implements animal,monkey,wisdom{
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

$lisi = new Human();
$lisi->think();

//根据接口，造一个鸟人
 class BirdMan implements animal,monkey,wisdom,bird{
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

   public function fly(){
        echo "Hi,我是天使，但大家都叫我鸟人";
   }
 }

 echo "<br>";
 $birdli = new BirdMan();
 $birdli->fly();