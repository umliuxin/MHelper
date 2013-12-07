<?php
$db = mysql_connect('localhost:8888','root','root');
if (!$db) { 
    die('TESTTESTTESTCould not connect: ' . mysql_error()); 
} 
mysql_select_db("MHelper");

function get_task()
{
	//get tasks by ?? order
	$return=array();
	$result=mysql_query("SELECT * FROM task ORDER BY start_date DESC LIMIT 10");
	while($row=mysql_fetch_row($result)){
		array_push($return, $row);
	}
	return $return;
}

function interpret($array)
{
	//id,title
	$result=array($array[0],$array[1],$array[2]);
	//category
	switch($array[3]){
		case 0:
		array_push($result,"Programming");
		break;
		case 1:
		array_push($result,"Engineering");
		break;
		case 2:
		array_push($result,"Design");
		break;
		case 3:
		array_push($result,"Science");
		break;
		case 4:
		array_push($result,"Language");
		break;
		case 5:
		array_push($result,"Sport");
		break;
		case 6:
		array_push($result,"Music");
		break;
		case 7:
		array_push($result,"Others");
		break;
		
	}
	//skill tags(seq:&$&)
	array_push($result,explode("&$&",$array[4]));
	//description
	array_push($result,$array[5]);
	//location
	switch($array[6]){
		case 0:
		array_push($result,"Central Campus");
		break;
		case 1:
		array_push($result,"North Campus");
		break;
		case 2:
		array_push($result,"South Campus");
		break;
		case 3:
		array_push($result,"Off Campus");
		break;
	}
	//startdate
	//enddate
	array_push($result,$array[7],$array[8],$array[9],$array[10]);
	//reward
	return $result;
}

function add_task($array)
	//array format:0:title,1:category,2:skill tag,3:description,4:num,5:location
	//6:startdate,7:enddate,8:reward,9:id
{
	$date = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
	$sql="INSERT INTO MHelper (create_time,title,task_category,skill_tags,task_description,task_location,attend_num,start_date,end_data,reward,uid,status,applied) VALUES(".$date.",".$array[0].",'".$array[1]."','".$array[2]."',".$array[3].",".$array[4].",".$array[5].",".$array[6].",".$array[7].",".$array[8].",".$array[9].",0,'0&$&')";
	echo $sql;
}

function cipher($array)
	//array_format:0-title,1-category,2-skilltag,3task-des,4location,5startdate,7enddate,8,reward
{
	$return=[];
	
	return $return;
}

?>