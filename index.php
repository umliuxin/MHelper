<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MHelper-Home</title>
	
	<!-- Load CSS Files -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="css/index.css">
	
	<!-- Load Script Files -->
	<script src="js/jquery/jquery.min.js"></script>
	<script src="js/jquery/jquery-ui.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	
</head>
<body>
	<?php require_once("header.php"); ?>
	<div class="container">
		<div class="row">
			<div id="leftbar" class="col-md-2">
				<h4><i class="fa fa-tags fa-fw"></i> Task Filter</h4>
			</div>
			<div id="mainbar" class="col-md-7">
				<h4><i class="fa fa-th-list fa-fw"></i> Task Explore</h4>
				<ul id="tasklist" class="list-unstyled">
					<?php for($i=0; $i <= 10; $i++){?>
					<li>
						<div class="author"><img src="img/avatar.jpg" class="avatar img-rounded"></div>
						<div class="content">
							<h4>Ok, so here would be the title of the task</h4>
							<h5>Name</h5>
							<div class="information">
								<div class="infoleft"><h4><small><i class="fa fa-thumbs-o-up"></i> 15</small></h4></div>
								<div class="infoleft"><h4><small><i class="fa fa-comment-o"></i> 9</small></h4></div>
								<div class="infoleft"><h4><small><i class="fa fa-rocket"></i> 5</small></h4></div>
								<div class="inforight"><h4><small><i class="fa fa-clock-o"></i> Just Now</small></h4></div>
							</div>
						</div>
					</li>
					<?php }?>
				</ul>
				<div style="text-align:center">
					<ul class="pagination task-pagination">
					  <li><a href="#">&laquo;</a></li>
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">&raquo;</a></li>
					</ul>
				</div>
			</div>
			<div id="rightbar" class="col-md-3">
			</div>
		</div>
	</div>
	
</body>
</html>