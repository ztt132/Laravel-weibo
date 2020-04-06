<?php
//单列类 保证只有一个实例 并提供一个访问的全局点
class SingletonController extends SingletonController
{
    //创建私有变量保护对象
    static private $instance;

    //防止使用new直接创建对象
    private function __construct(){}

    //防止clone对象
    private function __clone(){}

    //定义静态对象
    static public function getInstance()
    {
        //判断$instance是否是Singleton的对象不是则创建
        if(!self::$instance instanceof self){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function test(){
        echo '我是一个单列方法';
    }
}

$sing = SingletonController::getInstance();
$sing->test();

