<?php
$page = "home";

?>


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
				<ul id="filterlist" class="list-unstyled">
					<li>
						<h5><i class="fa fa-star"></i> Featured</h5>
						<ul id="featured" class="filteritem list-unstyled">
							<li class="selected">Popular</li>
							<li>Recently Launched</li>
							<li>Ending Soon</li>
							<li>Most Applied</li>
						</ul>
					</li>
					<li>
						<h5><i class="fa fa-tag"></i> Category</h5>
						<ul id="category" class="filteritem list-unstyled">
							<li>Programming</li>
							<li>Engineering</li>
							<li>Design</li>
							<li>Science</li>
							<li>Language</li>
							<li>Sports</li>
							<li>Music</li>
							<li>Others</li>
						</ul>
					</li>
					<li>
						<h5><i class="fa fa-check-square-o"></i> Status</h5>
						<ul id="status" class="filteritem list-unstyled">
							<li>Open</li>
							<li>In Progress</li>
							<li>Successful</li>
							<li>Failed</li>
						</ul>
					</li>
					<li>
						<h5><i class="fa fa-wrench"></i> Skill</h5>
						<ul id="skill" class="filteritem list-unstyled">
							<li>Photoshop</li>
							<li>Interview</li>
							<li>HTML</li>
							<li>Wood Cutting</li>
						</ul>
					</li>
					<li>
						<h5><i class="fa fa-map-marker"></i> Location</h5>
						<ul id="location" class="filteritem list-unstyled">
							<li>North Campus</li>
							<li>Central Campus</li>
							<li>South Campus</li>
							<li>Off Campus</li>
						</ul>
					</li>
				</ul>
			</div>
			<div id="mainbar" class="col-md-7">
				<h4><i class="fa fa-th-list fa-fw"></i> Task Explore</h4>
				<ul id="tasklist" class="list-unstyled">
					<?php for($i=0; $i <= 10; $i++){?>
					<li>
						<div class="author"><img src="img/avatar.jpg" class="avatar img-rounded"></div>
						<div class="content">
							<h5>Name, <span class="text-muted">I wrote python, I'm a super hero.</span></h5>
							<h4>Ok, so here would be the title of the task</h4>
							<p>Hey, be quiet, the adults are testing.</p>
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
				<ul id="tasklinks" class="list-unstyled">
					<li><i class="fa fa-file-o fa-fw"></i> My Posted Tasks</li>
					<li><i class="fa fa-rocket fa-fw"></i> My Applied Tasks</li>
					<li><i class="fa fa-edit fa-fw"></i> My Working Tasks</li>
					<li><i class="fa fa-check-circle-o fa-fw"></i> My Succesful Tasks</li>
					<li><i class="fa fa-times-circle-o fa-fw"></i> My Failed Tasks</li>
				</ul>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" charset="utf-8">
	$('.filteritem li').click(function(){
		var parent = $(this).parent();
		console.log(parent.attr('id'));
		if($(this).hasClass('selected')){
			$(this).removeClass('selected');
		}else{
			$(this).addClass('selected');
		}
	});
	</script>

</body>
</html>