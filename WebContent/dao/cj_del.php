<?php
require '../comm/conn.php';
$datas = $database->delete("T_YongJiCollectPolicy", [
    "Id" =>  $_POST ["Id"]
]);
$result=array("code"=>"0","msg"=>"ok","count"=>count($datas),"data"=>$datas);
$json = json_encode ( $result );
echo $json;
?>