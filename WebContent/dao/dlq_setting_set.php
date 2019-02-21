<?php
require '../comm/conn.php';
$datas = $database->update ( "T_YongJiSetData", [
				"overvoltageThreshold1" => $_POST ["overvoltageThreshold1"],
				"oVStartDelayTime1" => $_POST ["oVStartDelayTime1"],
				"overvoltageThreshold2" => $_POST ["overvoltageThreshold2"],
				"oVStartDelayTime2" => $_POST ["oVStartDelayTime2"],
				"overvoltageThreshold3" => $_POST ["overvoltageThreshold3"],
				"oVStartDelayTime3" => $_POST ["oVStartDelayTime3"],
				"overvoltageThreshold4" => $_POST ["overvoltageThreshold4"],
				"oVStartDelayTime4" => $_POST ["oVStartDelayTime4"],
				"oVRestoreDelayTime" => $_POST ["oVRestoreDelayTime"],
				"undervoltageThreshold" => $_POST ["undervoltageThreshold"],
				"uStartDelayTime" => $_POST ["uStartDelayTime"],
				"uRestoreDelayTime" => $_POST ["uRestoreDelayTime"],
				"powerOnDelayTime" => $_POST ["powerOnDelayTime"],
				"timerOpenSwitchEnable" => $_POST ["timerOpenSwitchEnable"],
				"timerCloseSwitchEnable" => $_POST ["timerCloseSwitchEnable"],
				"timerOpenSwitchTime" => $_POST ["timerOpenSwitchTime"],
				"timerCloseSwitchTime" => $_POST ["timerCloseSwitchTime"],
				"overcurrentThreshold" => $_POST ["overcurrentThreshold"],
				"oCStartDelayTime" => $_POST ["oCStartDelayTime"],
				"oCRestoreDelayTime" => $_POST ["oCRestoreDelayTime"],
				"kwhCeilLimit" => $_POST ["kwhCeilLimit"],
				"kwhLowLimit" => $_POST ["kwhLowLimit"],
],[
    "Id" => $_GET ["Id"]
]);
$result=array("code"=>"0","msg"=>"ok","count"=>count($datas),"data"=>$datas);
$json = json_encode ( $result );
echo $json;
?>
