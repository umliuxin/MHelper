<?php
	session_start();
	unset($_SESSION['access_token']);
	unset($_SESSION['userid']);
	header('Location: login.php');
?>