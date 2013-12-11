<?php
$page = "home";

require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_PlusService.php';
require("db.php");

session_start();

$client = new Google_Client();
$client->setApplicationName("MHelper");
// Visit https://code.google.com/apis/console to generate your
// oauth2_client_id, oauth2_client_secret, and to register your oauth2_redirect_uri.
$client->setClientId('965773967185-b3hd6glq9pi4vuorlo0kc21iuoh11n2s.apps.googleusercontent.com');
$client->setClientSecret('IGcSNMAc5x0J_mXSDk8t3uL_');
$client->setRedirectUri('http://chengqi.people.si.umich.edu/mhelper/index.php');
$client->setDeveloperKey('965773967185');
$plus = new Google_PlusService($client);

if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}

if (isset($_SESSION['access_token'])) {
  $client->setAccessToken($_SESSION['access_token']);
}

if ($client->getAccessToken()) {
  $me = $plus->people->get('me');
  isUser($me);
  $_SESSION['userid'] = $me['id'];
  $_SESSION['username'] = $me['displayName'];
  $_SESSION['avatar'] = $me['image']['url'];
}

// echo("<p>Here is the session information:\n<pre>\n");
// var_dump($_SESSION);
// var_dump($me);
// echo("\n</pre>\n");


$tasks = get_task(0,'','','','');

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
				<hr class="divider">
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
				<hr class="divider">
				<ul id="tasklist" class="list-unstyled">
					
					<?php foreach($tasks as $task){?>
						<li>
							<div class="author">
								<a href="profile.php?fid=<?=$task[11]?>"><img src="<?=$task[19][2]?>" class="avatar img-rounded"></a>
							</div>
							<div class="content">
								
								<h5><?=$task[19][1]?><span class="text-muted"> - <?=$task[19][3]?></span></h5>
								<a href="task.php?tid=<?=$task[0]?>" target="_blank"><h4><?=$task[2]?></h4></a>
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
				<!-- <div style="text-align:center">
					<ul class="pagination task-pagination">
					  <li><a href="#">&laquo;</a></li>
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">&raquo;</a></li>
					</ul>
				</div> -->
			</div>
			<div id="rightbar" class="col-md-3">
				<h4>
					<i class="fa fa-trophy"></i> My Tasks
				</h4>
		        <hr class="divider">
				<ul id="tasklinks" class="list-unstyled" style="margin-bottom:40px;">
					<li><i class="fa fa-file-o fa-fw"></i> My Posted Tasks</li>
					<li><i class="fa fa-users fa-fw"></i> My Applied Tasks</li>
					<li><i class="fa fa-edit fa-fw"></i> My Working Tasks</li>
					<li><i class="fa fa-check-circle-o fa-fw"></i> My Succesful Tasks</li>
					<li><i class="fa fa-times-circle-o fa-fw"></i> My Failed Tasks</li>
				</ul>

				<h4>
					<i class="fa fa-trophy"></i> Feeds
					<a class="pull-right"><small>View All</small></a>
				</h4>
		        <hr class="divider">
		        <ul class="badgecontent">
                    <li class="left clearfix">
                    	<span class="badgecontent-img pull-left">
                        	<img src="img/badge/balloon.png" alt="User Avatar" class="img-circle" />
                    	</span>
                        <div class="badgecontent-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Chengqi</strong>
                                    <small class="text-muted pull-right">
                                		<i class="fa fa-clock-o"></i> 12 hours ago
                                	</small>
                                <p><small>Created a badge in Programming</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="left clearfix">
                    	<span class="badgecontent-img pull-left">
                        	<img src="img/badge/cloud.png" alt="User Avatar" class="img-circle" />
                    	</span>
                        <div class="badgecontent-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Xinying</strong>
                                    <small class="text-muted pull-right">
                                		<i class="fa fa-clock-o"></i> 3 days ago
                                	</small>
                                <p><small>First skill unlocked: Chinese</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="left clearfix">
                    	<span class="badgecontent-img pull-left">
                        	<img src="img/badge/feather.png" alt="User Avatar" class="img-circle" />
                    	</span>
                        <div class="badgecontent-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Xin</strong>
                                    <small class="text-muted pull-right">
                                		<i class="fa fa-clock-o"></i> 10 days ago
                                	</small>
                                <p><small>Helped 10 people in a month</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="left clearfix">
                    	<span class="badgecontent-img pull-left">
                        	<img src="img/badge/lightbulb.png" alt="User Avatar" class="img-circle" />
                    	</span>
                        <div class="badgecontent-body clearfix">
                            <div class="header">
                                <strong class="primary-font">Chengchang</strong>
                                    <small class="text-muted pull-right">
                                		<i class="fa fa-clock-o"></i> 1 days ago
                                	</small>
                                <p><small>Create the first task</small></p>
                            </div>
                        </div>
                    </li>                                                                                       
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
		
		$.ajax({
			type:'GET',
			url:'handler.php',
			data:{filter:data},
			success:function(response){
				var tasks = JSON.parse(response);
				console.log(tasks);
				$('#tasklist').empty();
				for(var i=0; i<tasks.length; i++){
					var task = ''+						
						'<li>'+
							'<div class="author"><img src="'+tasks[i][19][2]+'" class="avatar img-rounded"></div>' +
							'<div class="content">' +
								'<h5>'+tasks[i][19][1]+'<span class="text-muted"> - '+tasks[i][19][3]+'</span></h5>' +
								'<a href="task.php?tid='+tasks[i][0]+'" target="_blank"><h4>'+tasks[i][2]+'</h4></a>' +
								'<p>'+tasks[i][5]+'</p>' +
								'<div class="information">' +
									'<div class="infoleft"><h4><small><i class="fa fa-thumbs-o-up"></i> '+tasks[i][15]+'</small></h4></div>' +
									'<div class="infoleft"><h4><small><i class="fa fa-comment-o"></i> '+tasks[i][17]+'</small></h4></div>' +
									'<div class="infoleft"><h4><small><i class="fa fa-users"></i> '+tasks[i][14]+'</small></h4></div>' +
									'<div class="inforight"><h4><small><i class="fa fa-clock-o"></i> '+tasks[i][1]+'</small></h4></div>' +
								'</div>' +
							'</div>' +
						'</li>';
					$('#tasklist').append(task);
				}
			},
			error:function( jqXHR, textStatus ) {
  			  console.log( "Request failed: " + textStatus );
		  	}
		});
		
	});
	</script>
	
	<?php require_once("footer.php"); ?>
	
</body>
</html>