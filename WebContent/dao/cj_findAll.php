<?php
require '../comm/conn.php';
$datas = $database->select ( "T_YongJiCollectPolicy", ["[>]T_YongJiConfig" => ["Id" => "Id"]], [
				"T_YongJiCollectPolicy.Id",
				"T_YongJiConfig.Name",
				"T_YongJiCollectPolicy.collectRealPower",
				"T_YongJiCollectPolicy.collectWastPower",
				"T_YongJiCollectPolicy.collectElectric",
				"T_YongJiCollectPolicy.collectVoltage",
				"T_YongJiCollectPolicy.collectInterval",
] );
$result=array("code"=>"0","msg"=>"ok","count"=>count($datas),"data"=>$datas);
$json = json_encode ( $result );
echo $json;
?>