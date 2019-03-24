<?php
/**
*
* tk_user 表的操作类
*
*/
class userModel extends model
{
	// 获取单个用户记录
	public function getUser($id)
	{
		$sql = "SELECT uid,tk_user_login,tk_display_name,tk_user_email FROM tk_user WHERE uid = ".$id;
		$data = $this->db->fetchRow($sql);

		return $data;
	}

	// 获取所有用户记录
	public function getAllUser()
	{
		$sql = "SELECT uid,tk_user_login,tk_display_name,tk_user_email FROM tk_user WHERE tk_user_rank > 3";
		$data = $this->db->fetchAll($sql);

		return $data;
	}
}