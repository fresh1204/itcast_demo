<?php
/**
*
* 前端控制器
*
*/
header('Content-type:text/html;charset=utf-8');
/*
// 载入数据库操作类
require_once 'MySqlPdo.class.php';
// 引入模型文件
require_once 'model.class.php';
require_once 'userModel.class.php';

//获取控制器名称
$con = isset($_GET['c']) ? $_GET['c'] : 'User';
//引入控制器文件
require_once './' . $con . 'Controller.class.php';

// 实例化控制器
$controller_name = $con . 'Controller';
$controller = new $controller_name;

// 获取控制器方法名
$action = isset($_GET['a']) ? $_GET['a'] : 'list';

$action_name = $action . 'Action';

$controller->$action_name();
*/

require_once './framework/framework.class.php';
$app = new framework();
$app->runApp();
