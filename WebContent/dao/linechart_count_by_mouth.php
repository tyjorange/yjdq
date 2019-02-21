<?php
require '../comm/conn.php';
$datas = $database->query("SELECT strftime('%m', Time) AS month,
                  	avg(voltage)
                  FROM
                  	T_YongJiSaveData
                  GROUP BY
                  	month
                  ORDER BY
                  	month DESC;"
)->fetchAll();
$alldata = array();
foreach ($datas as $key => $value) {
    $v1 = $value["0"];
    $v2 = $value["1"];
    $obj=array("mouth"=>$v1,"avg"=>$v2);
    array_push($alldata,$obj);
}
$result=array("code"=>"0","msg"=>"ok","count"=>count($alldata),"data"=>$alldata);
$json = json_encode ( $result );
echo $json;
?>