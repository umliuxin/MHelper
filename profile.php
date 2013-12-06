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
				
				<div class="media">
            		<a class="pull-left" href="#">
            			<img class="profile-avatar media-object dp img-circle" src="img/avatar.jpg" >
            		</a>
		            <div class="media-body col-md-6">
		                <h4 class="media-heading">Joe Doe <small> Ann Arbor</small></h4>
		               	<blockquote style="margin:0;">
	                		<small>Ann Arbor, United States  <i class="fa fa-map-marker"></i></small>
		            		<small>joedoe@gmail.com <i class="fa fa-envelope"></i></small>
		            		<small>www.mhelper.com <i class="fa fa-globe"></i></small>
		                </blockquote>
		                <hr style="margin:8px auto">
		                <span class="label label-default">HTML5/CSS3</span>
		                <span class="label label-primary">jQuery</span>
		                <span class="label label-info">Graphic Design</span>
		                <span class="label label-success">Python</span>
		            </div>
        		</div>
	        </div>
			
			<div id="profile-sidebar" class="col-md-3">
				<div class="list-group">
	                <a href="#" class="list-group-item create">
	                    <h3 class="pull-right"><i class="fa fa-big fa-edit"></i></h3>
	                    <h4 class="list-group-item-heading count">5</h4>
	                    <p class="list-group-item-text">Created Tasks</p>
	                </a>
	                <a href="#" class="list-group-item help">
	                    <h3 class="pull-right"><i class="fa fa-big fa-smile-o"></i></h3>
	                    <h4 class="list-group-item-heading count">10</h4>
	                    <p class="list-group-item-text">Helped Tasks</p>
	                </a>	                	                
            	</div>				
        	</div>

		</div>
	</div>

	<script>
		$(document).ready(function() {

		});
	</script>
</body>