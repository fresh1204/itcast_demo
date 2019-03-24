<?php

header('Content-type:text/html;charset=utf-8');

require_once 'MySqlPdo.class.php';

/*
$dbconfig = array('user'=>'htxtb','pwd'=>'chinatsp','dbname'=>'tankdb');

$obj = MySqlPdo::getInstance($dbconfig);

$sql = "SELECT uid,tk_user_login,tk_display_name,tk_user_email FROM tk_user WHERE tk_user_rank > 3";
$row = $obj->fetchAll($sql);
echo '<pre>';print_r($row);
*/
require_once 'model.class.php';
require_once 'userModel.class.php';

$user = new userModel();
$arr = $user->getUser(10);
echo '<pre>';print_r($arr);
$arr = $user->getAllUser();
echo '<pre>';print_r($arr);