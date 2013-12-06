<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MHelper-Profile</title>
	
	<!-- Load CSS Files -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="css/profile.css">
	
	<!-- Load Script Files -->
	<script src="js/jquery/jquery.min.js"></script>
	<script src="js/jquery/jquery-ui.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	
</head>
<body>
	<?php require_once("header.php"); ?>
	<div class="container">
		<div class="row" id="profile">
			<div id="profile-content" class="col-md-9">
				<div class="row">
					<div class="col-sm-2 col-md-2 no-padding">
						<img src="img/avatar.jpg" class="profile-avatar img-rounded img-responsive">
	        		</div>
	        		<div class="col-sm-4 col-md-4 no-padding">
	            		<blockquote>
	                		<p>Joe Doe</p>
	                		<small>Ann Arbor, United States  <i class="fa fa-map-marker"></i></small>
		            		<small>joedoe@gmail.com <i class="fa fa-envelope"></i></small>
		            		<small>www.mhelper.com <i class="fa fa-globe"></i></small>
		            		<small>January 30, 1974 <i class="fa fa-gift"></i></small>
		                </blockquote>
	        		</div>
	        	</div>
            </div>
			<div id="profile-sidebar" class="col-md-3">
			</div>
		</div>
	</div>
</body>