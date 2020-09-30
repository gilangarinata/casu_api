<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include dirname(dirname(__FILE__)).'/casu_api/db/Db.class.php';
$db = new Db();
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';


$sql_name = '';
if (!empty($tanggal)) {
    $sql_name = ' where tanggal LIKE \'%'.$tanggal.'%\'';
}
$cat_list = $db->query('select * from maktam_cup_besar '.$sql_name);

$arr = array();
$arr['info'] = 'success';
$arr['num'] = count($cat_list);
$arr['result'] = $cat_list;
echo json_encode($arr);