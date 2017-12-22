<?php
/*
 命名空间（名称空间）：默认进入控制器index
注意事项：
1.控制器名称请以大写字母开头
2.方法名均为小写
3.每个方法注明格式：
 1）方法用途
 2）方法参数
*/
namespace app\admin\controller;
/*
引用基类控制层
*/
use \think\Controller;
/*
引用数据库
*/
use \think\Db;
/*
引用session
*/
use \think\Session;
/*
引用指定回复信息（）
*/
use \think\Response;


class Auto extends Controller
{
    /*
         1）方法用途：公共层构造方法（自动引用）
         2）方法参数：
    */
    public function _initialize()
    {
        echo '这是构造函数';
    }
}
