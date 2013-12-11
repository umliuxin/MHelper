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
	print_r($in);
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
				<h3><?=$task[2]?></h3>
				<div class="authorinfo">
					<span class="pull-left"><img class="avatar" src="img/superhero/Hawkeye.png"><?=$tuser[1]?></span>
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
							<?php for($i=0; $i <= 4; $i++){?>
							<li>
								<div class="author"><img src="img/avatar.jpg" class="avatar img-rounded"></div>
								<div class="content">
									<h5>Name, <span class="text-muted">I wrote python, I'm a super hero.</span><span class="time pull-right">3 mins ago</span></h5>
									<p>Hey, be quiet, the adults are testing.</p>
								</div>
							</li>
							<?php }?>
							<li>
								<div class="author"><img src="img/avatar.jpg" class="avatar img-rounded"></div>
								<div class="content">
									<div class="form-group">
										<textarea id="comment" class="form-control" rows="3" placeholder="Type in your message"></textarea>
										<button type="button" class="btn btn-success pull-right">Comment</button>
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
					<button type="buttom" class="btn btn-info applybtn center-block disabled">My Project</button>
					<?php
					}
					else{
						$app=strpos($task[13],$uid);
						if ($app==FALSE){
							echo'<button type="buttom" class="btn btn-primary applybtn center-block">Apply to this task</button>';
						}
						else{
							echo'<button type="buttom" class="btn btn-success applybtn center-block disabled">Appied,Contact owner</button>';
						}
					}
					?>
					<p class="text-muted text-center">Task Applicants Remining: 2 of 2.</p>
					<label>Task Overview</label>
					<ul class="list-unstyled">
						<li><span class="pull-left">Category:</span><span class="pull-right"><?=$in[3]?></span></li>	
						<li><span class="pull-left">Time:</span><span class="pull-right">From: <?=$in[8]?></span>
						</br><span class="pull-right">To: <?=$in[9]?></span></li>
						<li><span class="pull-left">Location:</span><span class="pull-right"><?=$in[6]?></span></li>	
						<li><span class="pull-left">Reward:</span><span class="pull-right"><?=$in[10]?></span></li>		
					</ul>
				</div>
				
			</div>
		</div>
	</div>
<?php require_once("footer.php"); ?>
</body>