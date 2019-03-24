<?php
/**
*
* 基础模型类
*/
class model
{
	// 数据库对象
	protected $db;

	public function __construct()
	{
		$this->initDB();
	}

	private function initDB()
	{
		$dbconfig = array('user'=>'htxtb','pwd'=>'chinatsp','dbname'=>'tankdb');
		// 实例化数据库操作类
		$this->db = MySqlPdo::getInstance($dbconfig);
	}
}