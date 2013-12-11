<?php
session_start();
require('db.php');
if(isset($_SESSION['userid'])){
	$uid=$_SESSION['userid'];
}
if(isset($_GET['tid'])){
	$tid=$_GET['tid'];
	$task=getTask($tid);
	//print_r($task);
	$in=interpret($task);
	//print_r($in);
	//print_r($skill);
	$tuser=getUser($task[11]);
	//print_r($tuser);
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$task[2]?></title>
	
	<!-- Load CSS Files -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="css/task.css">
	
	<!-- Load Script Files -->
	<script src="js/jquery/jquery.min.js"></script>
	<script src="js/jquery/jquery-ui.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	
</head>
<body>
	<?php require_once("header.php"); ?>
	<div class="container">
		<div class="row">
			<div id="task-content" class="col-md-6 col-md-offset-1">
				<h3><?=$task[2]?><a href="#" class="btn btn-default likeBtn" onclick="return false;"><?=$task[15]?> <i class="fa fa-thumbs-o-up"></i></a></h3>
				<div class="authorinfo">
					<?php echo '<span class="pull-left"><img class="avatar" src="'.$tuser[2].'">'.$tuser[1].'</span>'; ?>
					<span class="pull-right">Posted: <?=relativeTime($task[1])?></span>
				</div>
				<ul class="list-unstyled">
					<li>
						<h4>Task Description</h4>
						<p><?=str_replace('\n','<br>',$task[5])?></p>
					</li>
					<li>
						<h4>Skill Requirements</h4>
						<?php
						if ($task[4]!='&$&')
						{
							for($i=1;$i<sizeof($in[4]);$i++){
								echo '<button type="button" class="btn btn-info skillBtn"> '.$in[4][$i].'</button>';
							}
						
						?>
					</li>
					<li>
						<h4>Applicants(3)</h4>
						<img class="avatar" src="img/superhero/Hawkeye.png" title="changge"><img class="avatar" src="img/superhero/Black Widow.png"><img class="avatar" src="img/superhero/Hulk.png">
					</li>
					<li>
						<h4>Message Board</h4>
						<ul id="messages" class="list-unstyled">
							<li>
								<div class="author"><img src="img/superhero/Captain America.png" class="avatar img-rounded"></div>
								<div class="content">
									<h5>Captain America, <span class="text-muted">I wrote python, I'm a super hero.</span><span class="time pull-right">3 mins ago</span></h5>
									<p>Hey, so how long will this task take? :)</p>
								</div>
							</li>
							<li>
								<div class="author"><img src="img/superhero/Hulk.png" class="avatar img-rounded"></div>
								<div class="content">
									<h5>Hulk, <span class="text-muted">I love sports, I save princess.</span><span class="time pull-right">3 mins ago</span></h5>
									<p>Hahaha, I like that idea.</p>
								</div>
							</li>
							<li>
								<div class="author"><img src="img/superhero/Iron Man Mark VI.png" class="avatar img-rounded"></div>
								<div class="content">
									<h5>Iron Man, <span class="text-muted">Yes, I'm Iron Man.</span><span class="time pull-right">3 mins ago</span></h5>
									<p>Hmm, I think I help with this one.</p>
								</div>
							</li>
							<li>
								<div class="author"><img src="<?=$_SESSION['avatar']?>" class="avatar img-rounded"></div>
								<div class="content">
									<div class="form-group">
										<textarea id="comment" class="form-control" rows="3" placeholder="Type in your message"></textarea>
										<button id="commentbtn" type="button" class="btn btn-success pull-right">Comment</button>
										<div class="checkbox"><label><input type="checkbox"> Private</label></div>
									</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				
	        </div>
			
			<div id="task-sidebar" class="col-md-4">
				<div class="overview">
					<?php
					$pos = strpos($task[11], $uid);
					if ($pos===0){
					?>
					<button id="applybtn" type="buttom" class="btn btn-info applybtn center-block disabled">My Project</button>
					<?php
					}
					else{
						$app=strpos($task[13], $uid);
						if ($app===FALSE){
							echo'<button id="applybtn" type="buttom" class="btn btn-primary applybtn center-block">Apply to this task</button>';
						}
						else{
							echo'<button id="applybtn" type="buttom" class="btn btn-success applybtn center-block disabled">Already Appied</button>';
						}
					}
					?>
					<p class="text-muted text-center">Task Applicants Remining: 2 of 2.</p>
					<label>Task Overview</label>
					<ul class="list-unstyled">
						<li><span class="pull-left">Category:</span><span class="pull-right"><?=$in[3]?></span></li>	
						<li><span class="pull-left">Time:</span><span class="pull-right">From: <?=$task[8]?></span>
						</br><span class="pull-right">To: <?=$task[9]?></span></li>
						<li><span class="pull-left">Location:</span><span class="pull-right"><?=$in[6]?></span></li>	
						<li><span class="pull-left">Reward:</span><span class="pull-right"><?=$task[10]?></span></li>		
					</ul>
				</div>
				
			</div>
		</div>
	</div>
	
	<script type="text/javascript" charset="utf-8">
	$('#commentbtn').click(function(){
		var comment = $('#comment').val();
		var newcmt = '<li><div class="author"><img src="<?=$_SESSION['avatar']?>" class="avatar img-rounded"></div>' +
								'<div class="content">' +
									'<h5><?=$_SESSION['username']?>, <span class="text-muted"></span><span class="time pull-right">Just Now</span></h5>' + 
									'<p>'+comment+'</p>' +
								'</div></li>';
		$('#messages li:last').before(newcmt);
	});
	$('#applybtn').click(function(){
		$(this).removeClass('btn-primary');
		$(this).addClass('btn-success disabled');
		$(this).html('Already Applied');
		$.ajax({
			type:'POST',
			url:'handler.php',
			data:{apply:'apply',userid:'<?=$_SESSION['userid']?>',taskid:'<?=$task[0]?>',task13:'<?=$task[13]?>',task14:'<?=$task[14]?>'},
			success:function(response){
				console.log(response);
			},
			error:function( jqXHR, textStatus ) {
  			  console.log( "Request failed: " + textStatus );
		  	}
		});
	});
	</script>
	
<?php require_once("footer.php"); ?>
</body>