<?php

/**
*
* 用户模块控制器类
*
*/

class UserController
{
	// 用户列表信息
	public function listAction()
	{	
		// 实例化模型 获取数据
		$user = new userModel();
		$data = $user->getAllUser();

		// 载入视图
		require_once './application/home/view/user_list.html';
	}

	// 查看某用户信息
	public function rowinfoAction()
	{
		$id = $_GET['id'];

		// 实例化模型 获取数据
		$user = new userModel();
		$data = $user->getUser($id);

		// 载入视图文件
		require_once './application/home/view/user_info.html';
	}
}