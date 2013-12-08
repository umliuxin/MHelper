<?php
$db = mysql_connect('67.194.115.27:8889','root','root');
if (!$db) { 
    die('TESTTESTTESTCould not connect: ' . mysql_error()); 
} 
mysql_select_db("MHelper");

function default_get_task()
{
	//get tasks by ?? order
	$return=array();
	$result=mysql_query("SELECT * FROM task ORDER BY create_date DESC");
	while($row=mysql_fetch_row($result)){
		array_push($return, $row);
	}
	return $return;
}

function get_task($featured,$category,$status,$skill,$location)
{
	$sql='SELECT * FROM task WHERE 1=1';
	if($category!=''){
		$catelist=explode(",",$category);
		$sql=$sql." AND (1=2";
		for($i=0;$i<sizeof($catelist);$i++){
			$sql=$sql." OR task_category=".$catelist[$i];
		}
		$sql=$sql.")";
	}
	if($status!=''){
		$catelist=explode(",",$status);
		$sql=$sql." AND (1=2";
		for($i=0;$i<sizeof($catelist);$i++){
			$sql=$sql." OR status=".$catelist[$i];
		}
		$sql=$sql.")";
	}
	if($location!=''){
		$catelist=explode(",",$location);
		$sql=$sql." AND (1=2";
		for($i=0;$i<sizeof($catelist);$i++){
			$sql=$sql." OR task_location=".$catelist[$i];
		}
		$sql=$sql.")";
	}
	if($skill!=''){
		$catelist=explode(",",$skill);
		$sql=$sql." AND (1=2";
		for($i=0;$i<sizeof($catelist);$i++){
			$sql=$sql." OR skill_tags LIKE '%".$catelist[$i]."%'";
		}
		$sql=$sql.")";
	}
	if($featured==0){
		$sql=$sql." ORDER BY 1-1/(1+((3600*24*(0.7*appliednum+0.2*likenum+commentnum*0.1))/TIME_TO_SEC(TIMEDIFF(NOW(),create_time))))";
	}
	if($featured==1){
		$sql=$sql." ORDER BY create_time DESC";
	}
	if($featured=='2'){
		$datetime = date('Y-m-d', time());
		$sql=$sql." AND (end_data  > ".$datetime." ) ORDER BY end_data";
	}
	if($featured==3){
		$sql=$sql." ORDER BY appliednum DESC";
	}
	echo $sql;
	$result=mysql_query($sql);
	$return=array();
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
	$sql="INSERT INTO task (title,task_category,skill_tags,task_description,task_location,attend_num,start_date,end_data,reward,uid,status,applied) VALUES('".$array[0]."',".$array[1].",'".$array[2]."','".$array[3]."',".$array[4].",".$array[5].",'".$array[6]."','".$array[7]."','".$array[8]."',".$array[9].",0,'0&$&')";
	mysql_query($sql);
}

function cipher($array)
	//array_format:0-title,1-category,2-skilltag,3task-des,4location,5num,6startdate,7enddate,8reward
{
	$return=array();
	array_push($return,$array[0]);
	switch($array[1]){
		case "Programming":
		array_push($return,0);
		break;
		case "Engineering":
		array_push($return,1);
		break;
		case "Design":
		array_push($return,2);
		break;
		case "Science":
		array_push($return,3);
		break;
		case "Language":
		array_push($return,4);
		break;
		case "Sport":
		array_push($return,5);
		break;
		case "Music":
		array_push($return,6);
		break;
		case "Others":
		array_push($return,7);
		break;
	}
	//skill tag
	array_push($return,'PHP');
	array_push($return,$array[3]);
	array_push($return,$array[5]);
	switch($array[4]){
		case "Central Campus":
		array_push($return,0);
		break;
		case "North Campus":
		array_push($return,1);
		break;
		case "South Campus":
		array_push($return,2);
		break;
		case "Off Campus":
		array_push($return,3);
		break;
	}
	array_push($return,$array[6]);
	array_push($return,$array[7]);
	array_push($return,$array[8]);
	array_push($return,1);
	return $return;
	//array format:0:title,1:category,2:skill tag,3:description,4:num,5:location
	//6:startdate,7:enddate,8:reward,9:id
}

?>