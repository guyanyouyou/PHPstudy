<?php 

/**
 * 类：是某一类无的抽象，是某类对象的蓝图
 * 比如：女娲造人时，脑子中关于人的形象 就是人类 class Human
 *
 * 如果，女娲决定造人时，同时，形象又没最终定稿时，
 * 他脑子有哪些支离破碎的形象呢？
 *
 * 她可能会这么思考：
 * 动物：吃饭
 * 猴子：奔跑
 * 猴子：哭
 * 自己：思考
 * 小鸟:飞
 * 我造一种生物，命名为人，应该有如下功能
 * eat()
 * run()
 * cry()
 * think()
 *
 * 类如果是一种实物/动物的抽象
 * 那么接口则是实物/动物的功能的抽象
 * 即，再把他们的功能各拆成小块
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
 * 如上，我们把每个类重的这种实现的功能拆出来
 * 分析：如果有一种新生物，实现了eat() + run() + cry() + think()，这种智慧生物，可以教做人
 */

 class Human implements animal,monkey,wisdom{

 }
    /**
     * 尽然说我有4个抽象方法
     * 因为接口的方法 本身就是抽象，不要有方法体，也不比加abstract
     */
 class Human implements animal,monkey,wisdom{
        public function eat(){
            echo "吃";
        }

        public function run(){
            echo "走";
        }

        public function cry(){
            echo "哭";
        }

        public function think(){
            echo "思考";
        }
  }

  $lisi = new Human();
  $lisi->think();

  /**
   * 根据接口造一个鸟人
   */
  class BirdMan implements animal,monkey,wisdom,bird{
        public function eat(){
            echo "吃";
        }

        public function run(){
            echo "走";
        }

        public function cry(){
            echo "哭";
        }

        public function think(){
            echo "思考";
        }
        public function fly(){
            echo "Hi,我是【表情】，但大家都叫我鸟人";
        }
  }
  $birdli = new BirdMan();
  $birdli->fly();
?>
