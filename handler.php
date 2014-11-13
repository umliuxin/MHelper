<?php
require("db.php");
if($_REQUEST["filter"]){
	$filter_data = $_REQUEST["filter"];
	$filter_array = explode('&',$filter_data);
	$filter_result = get_task($filter_array[0],$filter_array[1],$filter_array[2],$filter_array[3],$filter_array[4]);
	echo json_encode($filter_result); 
}
if($_REQUEST["apply"]){
	applytask($_REQUEST["userid"],$_REQUEST["taskid"],$_REQUEST["task13"],$_REQUEST["task14"]);
}
?>