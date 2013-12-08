<?php
	require 'db.php';
	
	get_task('','','','','');
	echo '<br>';
	$result=get_task('0','','','','');
	echo '<br>';
	print_r($result);
	echo '<br>';
	$test=array(array(10,2),array(2,1));
	sort($test[1]);
	print_r($test);
    $datetime = date('Y/m/d', time());
	echo $datetime-"2013-12-5";
?>