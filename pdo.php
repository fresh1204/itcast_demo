<?php

header('Content-type:text/html;charset=utf-8');

$dbms = 'mysql';
$host = '192.168.100.174';
$port = '';
$dbname = 'tankdb';
$user = 'htxtb';
$pwd = 'chinatsp';
$dsn = "$dbms:host=$host;dbname=$dbname";
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

try{
	$pdo = new PDO($dsn,$user,$pwd,$options);
	echo "PDO 连接数据库成功";
}catch(PDOException $e){
	echo $e->getMessage();
}