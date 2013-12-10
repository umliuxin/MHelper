<?php
$page = "new";

if(isset($_POST['title']))
{
require_once("db.php");
$title=$_POST['title'];
$category=$_POST['category'];
$skill=$_POST['skill'];
$description=$_POST['description'];
$location=$_POST['location'];
$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];
$num=$_POST['num'];
$reward=$_POST['reward'];
$result=array($title,$category,$skill,$description,$location,$num,$startdate,$enddate,$reward);
add_task(cipher($result));
}
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
	<link rel="stylesheet" href="css/jquery.tagit.css">
	<link rel="stylesheet" href="css/tagit.ui-zendesk.css">
	
	<!-- Load Script Files -->
	<script src="js/jquery/jquery.min.js"></script>
	<script src="js/jquery/jquery-ui.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/tag-it.js"></script>
	
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
				<form id="taskform" role="form" method="POST" >
					<div class="form-group">
						<label for="tasktitle">Task Title</label>
						<p>Be creative and clear.</p>
						<input type="text" id="tasktitle" class="form-control" name="title" placeholder="Enter Title">
					</div>
					<div class="form-group">
						<label for="category">Task Category</label>
						<select id="category" class="form-control" name="category">
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
						<input name="tags" id="skillTags" class="form-control" placeholder="Enter Skills">
						<!-- <input type="text" id="skill" class="form-control" name="skill" placeholder=""> -->
					</div>
					<div class="form-group">
						<label for="description">Task Description</label>
						<p>Describe what needs to be done in detail.</p>
						<textarea id="description" class="form-control" name="description" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="category">Task Location</label>
						<select id="category" class="form-control" name="location">
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
							<div class="input-group input-append date" data-date="" data-date-format="yyyy-mm-dd">
							  <input id="start" class="form-control" type="text" value="" name="startdate">
							  <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
						<div class="date-group">
							<label for="end">End At</label>
							<div class="input-group input-append date" data-date="" data-date-format="yyyy-mm-dd">
							  <input id="end" class="form-control" type="text" value="" name="enddate">
							  <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="number">Number of helpers</label>
						<p>Describe how many helpers you need in the task.</p>
						<input type="number" id="number" class="form-control" min="0" placeholder="" name="num" value="1">
					</div>
					<div class="form-group">
						<label for="reward">Reward</label>
						<p>Indicate the reward you will provide for the helpers.</p>
						<input type="text" id="reward" class="form-control" placeholder="" name="reward">
					</div>
					<hr>
					<button type="submit" class="btn btn-primary">Submit Task</button>
				</form>
				
			</div>
		</div>
	</div>
	

<script type="text/javascript" charset="utf-8">
	$('.date').datepicker();
	// $('#end').datepicker();
	$(function() {
	    var sampleTags = ['c++', 'java', 'php', 'javascript', 'asp', 'ruby', 'python', 'c', 'html', 'css', 'graphic design'];
	    $('#skillTags').tagit({
	        availableTags: sampleTags,
	        placeholderText: 'Enter skills',
	        allowSpaces: true,
	        caseSensitive: false,
	        tagLimit: 5,
	    });
	});
</script>	

<?php require_once("footer.php"); ?>

</body>
</html>