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
							<li value=0 class="selected"><i class="fa fa-check"></i>Recently Launched</li>
							<li value=1><i class="fa fa-check"></i>Popular</li>
							<li value=2><i class="fa fa-check"></i>Ending Soon</li>
							<li value=3><i class="fa fa-check"></i>Most Applied</li>
						</ul>
					</li>
					<li>
						<h5><i class="fa fa-tag"></i> Category</h5>
						<ul id="category" class="filteritem list-unstyled">
							<li value=0><i class="fa fa-check"></i>Programming</li>
							<li value=1><i class="fa fa-check"></i>Engineering</li>
							<li value=2><i class="fa fa-check"></i>Design</li>
							<li value=3><i class="fa fa-check"></i>Science</li>
							<li value=4><i class="fa fa-check"></i>Language</li>
							<li value=5><i class="fa fa-check"></i>Sport</li>
							<li value=6><i class="fa fa-check"></i>Music</li>
							<li value=7><i class="fa fa-check"></i>Others</li>
						</ul>
					</li>
					<li>
						<h5><i class="fa fa-wrench"></i> Skill</h5>
						<ul id="skill" class="filteritem list-unstyled">
							<li value="Photoshop"><i class="fa fa-check"></i>Photoshop</li>
							<li value="Interview"><i class="fa fa-check"></i>Interview</li>
							<li value="HTML"><i class="fa fa-check"></i>HTML</li>
							<li value="Math"><i class="fa fa-check"></i>Math</li>
							<li value="Chinese"><i class="fa fa-check"></i>Chinese</li>
						</ul>
					</li>
					<li>
						<h5><i class="fa fa-check-square-o"></i> Status</h5>
						<ul id="status" class="filteritem list-unstyled">
							<li value=0><i class="fa fa-check"></i>Open</li>
							<li value=1><i class="fa fa-check"></i>In Progress</li>
							<li value=2><i class="fa fa-check"></i>Successful</li>
							<li value=3><i class="fa fa-check"></i>Failed</li>
						</ul>
					</li>
					<li>
						<h5><i class="fa fa-map-marker"></i> Location</h5>
						<ul id="location" class="filteritem list-unstyled">
							<li value=0><i class="fa fa-check"></i>North Campus</li>
							<li value=1><i class="fa fa-check"></i>Central Campus</li>
							<li value=2><i class="fa fa-check"></i>South Campus</li>
							<li value=3><i class="fa fa-check"></i>Off Campus</li>
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
							<a href="task.php"><h4>Ok, so here would be the title of the task</h4></a>
							<p>Hey, be quiet, the adults are testing.</p>
							<div class="information">
								<div class="infoleft"><h4><small><i class="fa fa-thumbs-o-up"></i> 15</small></h4></div>
								<div class="infoleft"><h4><small><i class="fa fa-comment-o"></i> 9</small></h4></div>
								<div class="infoleft"><h4><small><i class="fa fa-users"></i> 5</small></h4></div>
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
					<li><i class="fa fa-users fa-fw"></i> My Applied Tasks</li>
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
		if (parent.attr('id') == 'featured'){
			parent.children().removeClass('selected');
			$(this).addClass('selected');
		}else{
			if($(this).hasClass('selected')){
				$(this).removeClass('selected');
			}else{
				$(this).addClass('selected');
			}
		}
		
		var data = "";
		$('#filterlist').children().each(function(){
			//var item = $(this).find('ul').attr('id');
			var value = "";
			$(this).find('.selected').each(function(){
				value = value + $(this).attr('value') + ','
			})
			data = data + value.slice(0,value.length-1) + "&";
		});
		
		data = data.slice(0,data.length-1);
		console.log(data);
	});
	</script>
	
	<?php require_once("footer.php"); ?>
	
</body>
</html>