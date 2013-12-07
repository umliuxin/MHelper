<?php
	require 'db.php';
	$result=get_task();
	print_r($result);
	print_r(interpret($result[0]));
?>