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
引用公共控制层
*/
use \app\admin\controller\Auto;


class Index extends Auto
{
    /*
     1）方法用途：进入首页
     2）方法参数：
*/
    public function index()
    {
        echo '这是首页';
    }
}
