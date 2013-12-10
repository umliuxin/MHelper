<?php
	require 'db.php';
	
	$result=get_task(2,'','','','');
	echo '<br><pre>';
	print_r($result);
	echo '<br>';
	print_r(interpret($result[2]));
	echo '</pre>';
	applytask(1,$result[2]);
?>