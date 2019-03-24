<?php
/**
*
*配置文件
*
*/

return array(
	// 数据库配置
	'db' => array(
		'user' => 'htxtb',
		'pwd' => 'chinatsp',
		'dbname' => 'tankdb',
	),

	// 整体项目
	'app' => array(
		'default_platform' => 'home',
	),

	// 前台配置
	'home' => array(
		'default_controller' => 'user', // 默认控制器
		'default_action' => 'list' // 默认方法
	),

	// 后台配置
	'admin' => array(
		'default_controller' => 'user', // 默认控制器
		'default_action' => 'list' // 默认方法
	),
);
