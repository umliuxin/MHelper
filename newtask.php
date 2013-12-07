<?php
$page = "new";

?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MHelper-New Task</title>
	
	<!-- Load CSS Files -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="css/newtask.css">
	<link rel="stylesheet" href="css/datepicker.css">
	
	<!-- Load Script Files -->
	<script src="js/jquery/jquery.min.js"></script>
	<script src="js/jquery/jquery-ui.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	
</head>
<body>
	<?php require_once("header.php"); ?>
	<div class="container">
		<div class="row">
			<div id="mainbar" class="col-md-8 col-md-offset-2">
				<div class="intro">
					<h3>Tell Us About Your Task</h3>
					<p>This section includes laying out your task description, skill requirements and your rewards.</p>
				</div>
				<form id="taskform" role="form" type="POST">
					<div class="form-group">
						<label for="tasktitle">Task Title</label>
						<p>Be creative and clear.</p>
						<input type="text" id="tasktitle" class="form-control" placeholder="Enter Title">
					</div>
					<div class="form-group">
						<label for="category">Task Category</label>
						<select id="category" class="form-control">
						  <option>Choose the category that best fits your task...</option>
						  <option>Programming</option>
						  <option>Engineering</option>
						  <option>Design</option>
						  <option>Science</option>
						  <option>Language</option>
						  <option>Sports</option>
						  <option>Music</option>
						  <option>Others</option>
						</select>
					</div>
					<div class="form-group">
						<label for="skill">Skill Tags (optional)</label>
						<p>Help others find your task by tagging it with relavant skills (max5).</p>
						<input type="text" id="skill" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label for="description">Task Description</label>
						<p>Describe what needs to be done in detail.</p>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="category">Task Location</label>
						<select id="category" class="form-control">
						  <option>Choose the location of the task...</option>
						  <option>North Campus</option>
						  <option>Central Campus</option>
						  <option>South Campus</option>
						  <option>Off Campus</option>
						</select>
					</div>
					<div class="form-group">
						<div class="date-group">
							<label for="start">Start At</label>
							<div class="input-group input-append date" id="start" data-date="" data-date-format="mm-dd-yyyy">
							  <input class="form-control" type="text" value="">
							  <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
						<div class="date-group">
							<label for="end">End At</label>
							<div class="input-group input-append date" id="end" data-date="" data-date-format="mm-dd-yyyy">
							  <input class="form-control" type="text" value="">
							  <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="reward">Reward</label>
						<p>Indicator the reward you will provide for the helpers.</p>
						<input type="text" id="reward" class="form-control" placeholder="">
					</div>
					<hr>
					<button type="submit" class="btn btn-primary">Submit Task</button>
				</form>
				
			</div>
		</div>
	</div>
	
	<script type="text/javascript" charset="utf-8">
	$('#start').datepicker();
	$('#end').datepicker();
	</script>
	


</body>
</html>