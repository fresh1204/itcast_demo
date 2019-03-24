<?php

/**
*
* PDO-MYSQL 数据库操作类
*
*/

class MySqlPdo
{
	// 数据库连接信息
	private $dbConfig = array(
		'db' => 'mysql',
		'host' => '192.168.100.174',
		'port' => '',
		'user' => '',
		'pwd' => '',
		'charset' => 'utf8',
		'dbname' => ''
	);

	// 单例模式
	private static $instance;
	// pdo对象
	private $db;

	private function __construct($params)
	{
		// 初始化属性
		$this->dbConfig = array_merge($this->dbConfig,$params);
		//echo '<pre>';print_r($this->dbConfig);exit;
		// 连接数据库服务
		$this->connect();
	}

	// 获得单例对象
	public static function getInstance($params = array())
	{
		if(!self::$instance instanceof self){
			self::$instance = new self($params);
		}

		return self::$instance;
	}

	private function __clone(){}

	// 连接数据库
	private function connect()
	{
		try{
			$dsn = "{$this->dbConfig['db']}:host={$this->dbConfig['host']};".
			"dbname={$this->dbConfig['dbname']};charset={$this->dbConfig['charset']}";
			//echo $dsn;exit;

			$this->db = new PDO($dsn,$this->dbConfig['user'],$this->dbConfig['pwd']);

			$this->db->query("SET NAMES {$this->dbConfig['charset']}");
			//echo "PDO 连接数据库成功";
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
	}

	// 执行sql
	public function query($sql)
	{
		$rst = $this->db->query($sql);
		if($rst === false){
			$error = $this->db->errorInfo();
			exit("数据库操作失败: ERROR {$error[1]}({$error[0]}):{$error[2]}");
		}

		return $rst;
	}

	// 获取单个记录
	public function fetchRow($sql)
	{
		return $this->query($sql)->fetch(PDO::FETCH_ASSOC);
	}

	// 获取多个记录
	public function fetchAll($sql)
	{
		return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	}
}

/*
$obj = MySqlPdo::getInstance();

$sql = "SELECT uid,tk_user_login,tk_display_name,tk_user_email FROM tk_user WHERE tk_user_rank > 3";
$row = $obj->fetchAll($sql);
echo '<pre>';print_r($row);
*/


