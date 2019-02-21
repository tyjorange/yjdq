<?php
require '../comm/conn.php';
$datas = $database->select ( "T_YongJiConfig", [
				"Id",
				"Name",
				"Switch",
] );
$result=array("code"=>"0","msg"=>"ok","count"=>count($datas),"data"=>$datas);
$json = json_encode ( $result );
echo $json;
?>