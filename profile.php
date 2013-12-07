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
			<div id="profile-content" class="col-md-7 col-md-offset-1">
				
				<div class="media" style="padding:0 0 40px 0;">
            		<a class="pull-left" href="#">
            			<img class="profile-avatar media-object dp img-circle" src="img/superhero/Captain America.png" >
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
				<h4><i class="fa fa-user"></i> User Status</h4>
		        <hr class="divider">
				<ul class="profile-tabs">
				    <li class="followers">
					    <a href="/MengTo/followers">
					    	<span class="count">5</span>
					    	<span class="meta">Created</span>
						</a>
					</li>
				    <li class="following">
					    <a href="/MengTo/following">
					    	<span class="count">10</span>
					    	<span class="meta">Helped</span>
						</a>
					</li>
				    <li class="listed">
					    <a href="/MengTo/lists/memberships">
					    	<span class="count">200</span>
					    	<span class="meta">Views</span>
						</a>
					</li>
				</ul>		
        	</div>
		</div>

		<div class="row" class="profile-content">
			<div id="profile-tasks" class="col-md-7 col-md-offset-1">
				<ul class="nav nav-tabs" id="myTab">
      				<li class="active"><a href="#created" data-toggle="tab"><small>Created Tasks  <span class="badge">5</span></small></a></li>
      				<li><a href="#helped" data-toggle="tab"><small>Helped Tasks <span class="badge">10</span></small></a></li>
					<li><a href="#endorse" data-toggle="tab"><small>Skills &amp; Expertise</small></a></li>
					<li><a href="#reputation" data-toggle="tab"><small>Reputation</small></a></li>     				
    				<li><a href="#friendlist" data-toggle="tab"><small>Friend List</small></a></li>
    			</ul>

				<div class="tab-content" style="margin-top:20px;">
				  <div class="tab-pane active" id="created">
					<ul id="tasklist" class="list-unstyled">
						<?php for($i=0; $i <= 4; $i++){?>
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
				  	</div>
				  	<div class="tab-pane" id="helped">
						<ul id="tasklist" class="list-unstyled">
							<?php for($i=0; $i <= 9; $i++){?>
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
				  	</div>
				  	<div class="tab-pane" id="endorse">endorse content</div>
				  	<div class="tab-pane" id="reputation">reputation content</div>
					<div class="tab-pane" id="friendlist">
					    <div class="row">
					      	<ul class="thumbnails list-unstyled">
					      		<?php for($i=0; $i <= 11; $i++){?>
						        <li class="col-md-3">
						          <div class="thumbnail" style="padding: 0">
						            <div class="caption">
						          		<h4 class="media-heading">Joe Doe</h4>
						          		<p class="pull-right"> -- Ann Arbor</p>
						            	<h4><small class="caption-info"><i class="fa fa-edit"></i> 12</small></h4>
						            	<h4><small class="caption-info"><i class="fa fa-smile-o"></i> 6</small></h4>
						            </div>
						            <img style="width: 100%" src="http://placehold.it/300x300">            
						          </div>
						        </li>
	        					<?php }?>
					    	</ul>
						</div>		  
					</div>

			</div>

	<script>

		$(document).ready(function() {
			$('#myTab a').click(function (e) {
			  e.preventDefault();
			  $(this).tab('show');
			});
			$('.thumbnail').hover(
		        function(){
		            $(this).find('.caption').slideDown(250); //.fadeIn(250)
		        },
		        function(){
		            $(this).find('.caption').slideUp(250); //.fadeOut(205)
		        }
    		); 
		});
	</script>
</body>