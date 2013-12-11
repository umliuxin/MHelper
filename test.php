<?php
	require 'db.php';
	
	$result=get_task(2,'','','','');
	echo '<br><pre>';
	print_r($result);
	echo '<br>';
	print_r(interpret($result[2]));
	
	$re=getUser('115961391373383503520');
	print_r($re);
	echo '</pre>';
?>