<?php
require '../comm/conn.php';
$datas = $database->update ( "T_YongJiConfig", [
    "Name" => $_POST ["Name"]
],[
    "Id" => $_POST ["Id"]
]);
$json = json_encode ( $datas );
echo $json;
?>
