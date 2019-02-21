<?php
require '../comm/conn.php';
if (isset ( $_POST ["Name"] )) {
    $datas = $database->update ( "T_YongJiConfig", [
        "Name" => $_POST ["Name"]
    ],[
        "Id" => $_POST ["Id"]
    ]);
} else if (isset ( $_POST ["Switch"] )) {
    $datas = $database->update ( "T_YongJiConfig", [
        "Switch" => $_POST ["Switch"]
    ],[
        "Id" => $_POST ["Id"]
    ]);
}
$result=array("code"=>"0","msg"=>"ok","count"=>count($datas),"data"=>$datas);
$json = json_encode ( $result );
echo $json;
?>
