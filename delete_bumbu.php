<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include dirname(dirname(__FILE__)).'/casu_api/db/Db.class.php';
$db = new Db();
$id = isset($_POST['id']) ? $_POST['id'] : '';

$cat_list = $db->query("DELETE FROM `maktam_bumbu_add` WHERE `maktam_bumbu_add`.`id` = $id");
$arr = array();
$arr['info'] = 'success';
$arr['num'] = count($cat_list);
$arr['result'] = $cat_list;
echo json_encode($arr);