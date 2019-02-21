<?php
require '../comm/conn.php';
$datas = $database->select ( "T_YongJiSetData", [
				"overvoltageThreshold1",
				"oVStartDelayTime1",
				"overvoltageThreshold2",
				"oVStartDelayTime2",
				"overvoltageThreshold3",
				"oVStartDelayTime3",
				"overvoltageThreshold4",
				"oVStartDelayTime4",
				"oVRestoreDelayTime",
				"undervoltageThreshold",
				"uStartDelayTime",
				"uRestoreDelayTime",
				"powerOnDelayTime",
				"timerOpenSwitchEnable",
				"timerCloseSwitchEnable",
				"timerOpenSwitchTime",
				"timerCloseSwitchTime",
				"overcurrentThreshold",
				"oCStartDelayTime",
				"oCRestoreDelayTime",
				"kwhCeilLimit",
				"kwhLowLimit",
],[
     "Id" => $_POST ["Id"]
]);
$result=array("code"=>"0","msg"=>"ok","count"=>count($datas),"data"=>$datas);
$json = json_encode ( $result );
echo $json;
?>