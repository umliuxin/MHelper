<?php
session_start();
require('db.php');

$uid=$_SESSION['userid'];
$user=getUser($uid);

if(isset($_GET['fid'])){
	$uid=$_GET['fid'];
	$user=getUser($uid);
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>MHelper-Profile</title>
	
	<!-- Load CSS Files -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"/>
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/profile.css"/>
	
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
	
				<div class="media" style="padding:0 0 20px 0;">
            		<a class="pull-left" href="#">
            			<img class="profile-avatar media-object dp img-circle" src="<?php echo substr($user[2], 0, strlen($user[2])-2).'150';?>" >
            		</a>
		            <div class="media-body col-md-7">
		                <h4 class="media-heading"><?=$user[1]?> <small> Ann Arbor</small></h4>
		               	<blockquote style="margin:0;">
	                		<small><i class="fa fa-pencil-square"></i> <?=$user[3]?></small>
							<?php if(!isset($_GET['fid'])){?>
		            		<small><i class="fa fa-envelope fw"> joedoe@gmail.com</i></small>
		            		<small><i class="fa fa-globe fw"></i> www.mhelper.com</small>
							<?php } 
							else{?>
							<small><i class="fa fa-hospital-o fw"></i> School of Information</small>
							<?php }?>
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
					<?php
					$ctasks=getcreatedtask($uid);
					$tasks=getapplytask($uid);
					$view=rand(0,10);
					?>
				    <li class="followers">
					    <a href="/MengTo/followers">
					    	<span class="count"><?=count($ctasks)?></span>
					    	<span class="meta">Created</span>
						</a>
					</li>
				    <li class="following">
					    <a href="/MengTo/following">
					    	<span class="count"><?=count($tasks)?></span>
					    	<span class="meta">Helped</span>
						</a>
					</li>
				    <li class="listed">
					    <a href="/MengTo/lists/memberships">
					    	<span class="count"><?=$view?></span>
					    	<span class="meta">Likes</span>
						</a>
					</li>
				</ul>		
        	</div>
		</div>

		<div class="row" class="profile-content">
			<div id="profile-tasks" class="col-md-7 col-md-offset-1">
				<ul class="nav nav-tabs" id="myTab">
      				<li class="active"><a href="#created" data-toggle="tab"><small>Created Tasks  <span class="badge"><?=count($ctasks)?></span></small></a></li>
      				<li><a href="#helped" data-toggle="tab"><small>Helped Tasks <span class="badge"><?=count($tasks)?></span></small></a></li>
					<li><a href="#endorse" data-toggle="tab"><small>Skills &amp; Expertise</small></a></li>
    				<li><a href="#friendlist" data-toggle="tab"><small>Contact List</small></a></li>
    			</ul>

				<div class="tab-content" style="margin-top:20px;">
				  <div class="tab-pane active" id="created">
					<ul id="tasklist" class="list-unstyled">
						<?php foreach($ctasks as $task){?>
							<li>
								<div class="author">
									<a href="profile.php?fid=<?=$task[11]?>"><img src="<?=$task[19][2]?>" class="avatar img-rounded"></a>
								</div>
								<div class="content">
								
									<h5><?=$task[19][1]?><span class="text-muted">,<?=$task[19][3]?></span></h5>
									<a href="task.php?tid=<?=$task[0]?>"><h4><?=$task[2]?></h4></a>
									<p><?=$task[5]?></p>
									<div class="information">
										<div class="infoleft"><h4><small><i class="fa fa-thumbs-o-up"></i> <?=$task[15]?></small></h4></div>
										<div class="infoleft"><h4><small><i class="fa fa-comment-o"></i> <?=$task[17]?></small></h4></div>
										<div class="infoleft"><h4><small><i class="fa fa-users"></i> <?=$task[14]?></small></h4></div>
										<div class="inforight"><h4><small><i class="fa fa-clock-o"></i> <?=$task[1]?></small></h4></div>
									</div>
								</div>
							</li>
						<?php }?>
					</ul>
				  	</div>
				  	<div class="tab-pane" id="helped">
						<ul id="tasklist" class="list-unstyled">
							<?php foreach($tasks as $task){?>
								<li>
									<div class="author">
										<a href="profile.php?fid=<?=$task[11]?>"><img src="<?=$task[19][2]?>" class="avatar img-rounded"></a>
									</div>
									<div class="content">
								
										<h5><?=$task[19][1]?><span class="text-muted">,<?=$task[19][3]?></span></h5>
										<a href="task.php?tid=<?=$task[0]?>"><h4><?=$task[2]?></h4></a>
										<p><?=$task[5]?></p>
										<div class="information">
											<div class="infoleft"><h4><small><i class="fa fa-thumbs-o-up"></i> <?=$task[15]?></small></h4></div>
											<div class="infoleft"><h4><small><i class="fa fa-comment-o"></i> <?=$task[17]?></small></h4></div>
											<div class="infoleft"><h4><small><i class="fa fa-users"></i> <?=$task[14]?></small></h4></div>
											<div class="inforight"><h4><small><i class="fa fa-clock-o"></i> <?=$task[1]?></small></h4></div>
										</div>
									</div>
								</li>
							<?php }?>
						</ul>				  		
				  	</div>
				  	<div class="tab-pane" id="endorse">

						<h4>Most endorsed for ...</h4>
						<div class="row nopadding">
							<button type="button" class="btn btn-labeled btn-success endorseBtn">
                				<span class="btn-label">5</span>HTML
                			</button>
                			<div class="endorseContainer">
                				<ul class="endorsersPics">
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Giant Man.png"></li>
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Hawkeye.png"></li>
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Hulk.png"></li>
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Iron Man Mark I.png"></li>
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Loki.png"></li>
                				</ul>
                				<hr class="endorseLine">                				
                			</div>
						</div>
						<div class="row nopadding">
	            			<button type="button" class="btn btn-labeled btn-danger endorseBtn">
	                			<span class="btn-label">3</span>CSS
	                		</button>
	                		<div class="endorseContainer">
	                			<ul class="endorsersPics">
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Black Widow.png"></li>
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Iron Man Mark II.png"></li>
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Iron Man Mark IV.png"></li>
                				</ul>
                				<hr class="endorseLine">                				
                			</div>						
						</div>
						<div class="row nopadding">
	            			<button type="button" class="btn btn-labeled btn-info endorseBtn">
	                			<span class="btn-label">2</span>PHP
	                		</button>
	                		<div class="endorseContainer">
	                			<ul class="endorsersPics">
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Nick Fury.png"></li>
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Thor.png"></li>
                				</ul>
                				<hr class="endorseLine">				
                			</div>						
						</div>
						<div class="row nopadding">
	            			<button type="button" class="btn btn-labeled btn-warning endorseBtn">
	                			<span class="btn-label">2</span>Graphic Design
	                		</button>
	                		<div class="endorseContainer">
	                			<ul class="endorsersPics">
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/War Machine.png"></li>
                					<li><img class="endorser small-thumbnail" width="30" height="30" src="img/superhero/Agent Coulson.png"></li>
                				</ul>
                				<hr class="endorseLine">                				
                			</div>						
						</div>
						<h4>Chengqi also knows about ...</h4>
						<div class="row nopadding">
							<button type="button" class="btn btn-labeled btn-other btn-success">Illustration</button>
							<button type="button" class="btn btn-labeled btn-other btn-default">jQuery</button>
							<button type="button" class="btn btn-labeled btn-other btn-primary">Data Visualization</button>
							<button type="button" class="btn btn-labeled btn-other btn-info">Badminton</button>
							<button type="button" class="btn btn-labeled btn-other btn-warning">Academic writing</button>
						</div>

				  	</div>
				  	<div class="tab-pane" id="reputation">reputation content</div>
					<div class="tab-pane" id="friendlist">
					    <div class="row nopadding">
					      	<ul class="thumbnails list-unstyled">
						        <li>
						          <div class="thumbnail" style="padding: 0">
						            <div class="caption">
						          		<h4 class="media-heading">Black Widow</h4>
						          		<p class="pull-right">Ann Arbor</p>
						          		<div class="caption-info-container">
						            		<h4 class="caption-info"><small><i class="fa fa-edit"></i> 14</small></h4>
						            		<h4 class="caption-info"><small><i class="fa fa-smile-o"></i> 2</small></h4>
						             	</div>
						            </div>
						            <div class="thumbnail-img-container">
						           		<img class="thumbnail-img" src="img/superhero/Black Widow.png">
						            </div>
						          </div>
						        </li>
						        <li>
						          <div class="thumbnail" style="padding: 0">
						            <div class="caption">
						          		<h4 class="media-heading">Giant Man</h4>
						          		<p class="pull-right">Ann Arbor</p>
						          		<div class="caption-info-container">
						            		<h4 class="caption-info"><small><i class="fa fa-edit"></i> 3</small></h4>
						            		<h4 class="caption-info"><small><i class="fa fa-smile-o"></i> 6</small></h4>
						             	</div>
						            </div>
						            <div class="thumbnail-img-container">
						           		<img class="thumbnail-img" src="img/superhero/Giant Man.png">
						            </div>
						          </div>
						        </li>
						        <li>
						          <div class="thumbnail" style="padding: 0">
						            <div class="caption">
						          		<h4 class="media-heading">Hawkeye</h4>
						          		<p class="pull-right">Ann Arbor</p>
						          		<div class="caption-info-container">
						            		<h4 class="caption-info"><small><i class="fa fa-edit"></i> 1</small></h4>
						            		<h4 class="caption-info"><small><i class="fa fa-smile-o"></i> 3</small></h4>
						             	</div>
						            </div>
						            <div class="thumbnail-img-container">
						           		<img class="thumbnail-img" src="img/superhero/Hawkeye.png">
						            </div>
						          </div>
						        </li>
						        <li>
						          <div class="thumbnail" style="padding: 0">
						            <div class="caption">
						          		<h4 class="media-heading">Hulk</h4>
						          		<p class="pull-right">Ann Arbor</p>
						          		<div class="caption-info-container">
						            		<h4 class="caption-info"><small><i class="fa fa-edit"></i> 2</small></h4>
						            		<h4 class="caption-info"><small><i class="fa fa-smile-o"></i> 4</small></h4>
						             	</div>
						            </div>
						            <div class="thumbnail-img-container">
						           		<img class="thumbnail-img" src="img/superhero/Hulk.png">
						            </div>
						          </div>
						        </li>
						        <li>
						          <div class="thumbnail" style="padding: 0">
						            <div class="caption">
						          		<h4 class="media-heading">Iron Man</h4>
						          		<p class="pull-right">Ann Arbor</p>
						          		<div class="caption-info-container">
						            		<h4 class="caption-info"><small><i class="fa fa-edit"></i> 9</small></h4>
						            		<h4 class="caption-info"><small><i class="fa fa-smile-o"></i> 0</small></h4>
						             	</div>
						            </div>
						            <div class="thumbnail-img-container">
						           		<img class="thumbnail-img" src="img/superhero/Iron Man.png">
						            </div>
						          </div>
						        </li>
						        <li>
						          <div class="thumbnail" style="padding: 0">
						            <div class="caption">
						          		<h4 class="media-heading">Loki</h4>
						          		<p class="pull-right">Ann Arbor</p>
						          		<div class="caption-info-container">
						            		<h4 class="caption-info"><small><i class="fa fa-edit"></i> 0</small></h4>
						            		<h4 class="caption-info"><small><i class="fa fa-smile-o"></i> 4</small></h4>
						             	</div>
						            </div>
						            <div class="thumbnail-img-container">
						           		<img class="thumbnail-img" src="img/superhero/Loki.png">
						            </div>
						          </div>
						        </li>
						        <li>
						          <div class="thumbnail" style="padding: 0">
						            <div class="caption">
						          		<h4 class="media-heading">Nick Fury</h4>
						          		<p class="pull-right">Ann Arbor</p>
						          		<div class="caption-info-container">
						            		<h4 class="caption-info"><small><i class="fa fa-edit"></i> 5</small></h4>
						            		<h4 class="caption-info"><small><i class="fa fa-smile-o"></i> 1</small></h4>
						             	</div>
						            </div>
						            <div class="thumbnail-img-container">
						           		<img class="thumbnail-img" src="img/superhero/Nick Fury.png">
						            </div>
						          </div>
						        </li>
						        <li>
						          <div class="thumbnail" style="padding: 0">
						            <div class="caption">
						          		<h4 class="media-heading">Thor</h4>
						          		<p class="pull-right">Ann Arbor</p>
						          		<div class="caption-info-container">
						            		<h4 class="caption-info"><small><i class="fa fa-edit"></i> 3</small></h4>
						            		<h4 class="caption-info"><small><i class="fa fa-smile-o"></i> 4</small></h4>
						             	</div>
						            </div>
						            <div class="thumbnail-img-container">
						           		<img class="thumbnail-img" src="img/superhero/Thor.png">
						            </div>
						          </div>
						        </li>
					    	</ul>
						</div>		  
					</div>
				</div>
			</div>

			<div id="profile-badge" class="col-md-3">
				<h4>
					<i class="fa fa-trophy"></i> User Badge
					<a class="pull-right"><small>View All</small></a>
				</h4>
		        <hr class="divider">
		        <ul class="badgecontent">
                    <li class="left clearfix">
                    	<span class="badgecontent-img pull-left">
                        	<img src="img/badge/acorn.png" alt="User Avatar" class="img-circle" />
                    	</span>
                        <div class="badgecontent-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Help 3 Tasks in one month</strong>
                            </div>
                            <p>
								<small class="text-muted">
                                	<i class="fa fa-clock-o"></i>Earned 12 hours ago
                                </small>
                            </p>
                        </div>
                    </li>
                    <li class="left clearfix">
                    	<span class="badgecontent-img pull-left">
                        	<img src="img/badge/coffee.png" alt="User Avatar" class="img-circle" />
                    	</span>
                        <div class="badgecontent-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Create 2 tasks in a week</strong>
                            </div>
                            <p>
								<small class="text-muted">
                                	<i class="fa fa-clock-o"></i>Earned 3 days ago
                                </small>
                            </p>
                        </div>
                    </li>
                    <li class="left clearfix">
                    	<span class="badgecontent-img pull-left">
                        	<img src="img/badge/leaf.png" alt="User Avatar" class="img-circle" />
                    	</span>
                        <div class="badgecontent-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Endorsed a new skill</strong>
                            </div>
                            <p>
								<small class="text-muted">
                                	<i class="fa fa-clock-o"></i>Earned 3 weeks ago
                                </small>
                            </p>
                        </div>
                    </li>
                    <li class="left clearfix">
                    	<span class="badgecontent-img pull-left">
                        	<img src="img/badge/star.png" alt="User Avatar" class="img-circle" />
                    	</span>
                        <div class="badgecontent-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Get a five star review</strong>
                            </div>
                            <p>
								<small class="text-muted">
                                	<i class="fa fa-clock-o"></i>Earned 23 hours ago
                                </small>
                            </p>
                        </div>
                    </li>                                                            
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
    		$('.badgecontent-img').mouseover(function() {
    			$(this).children().addClass('animated bounce');
    		})
    		$('.badgecontent-img').mouseout(function() {
    			$(this).children().removeClass('animated bounce');
    		})
		});
	</script>
	
	<?php require_once("footer.php"); ?>
</body>