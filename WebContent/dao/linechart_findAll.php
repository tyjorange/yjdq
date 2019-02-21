<?php
require '../comm/conn.php';
$datas = $database->select ( "T_YongJiSaveData", [
				"Id",
				"Time",
				"monthKvarh",
				"monthKwh",
				"voltage",
				"electric"
] );
$alldata = array();
foreach ($datas as $key => $value) {
    $v1 = $value["Time"];
    $v2 = $value["monthKvarh"];
    $v3 = $value["monthKwh"];
    $v4 = $value["voltage"];
    $v5 = $value["electric"];
    $obj=array("time"=>$v1,"monthKvarh"=>$v2,"monthKwh"=>$v3,"voltage"=>$v4,"electric"=>$v5);
    array_push($alldata,$obj);
}
$result=array("code"=>"0","msg"=>"ok","count"=>count($alldata),"data"=>$alldata);
$json = json_encode ( $result );
echo $json;
?>