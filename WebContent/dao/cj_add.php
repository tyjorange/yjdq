<?php
require '../comm/conn.php';
$database->delete("T_YongJiCollectPolicy",[]);
$array = $_POST ["Ids"];
foreach ($array as $key => $value) {
$datas = $database->insert("T_YongJiCollectPolicy", [
             "Id"=>$value['Id'],
             "collectRealPower"=>$_POST ["collectRealPower"],
             "collectWastPower"=>$_POST ["collectWastPower"],
             "collectElectric"=>$_POST ["collectElectric"],
             "collectVoltage"=>$_POST ["collectVoltage"],
             "collectInterval"=>$_POST ["collectInterval"],
]);
}
$result=array("code"=>"0","msg"=>"ok","count"=>count($datas),"data"=>$datas);
$json = json_encode ( $result );
echo $json;
?>