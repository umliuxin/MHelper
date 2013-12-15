<?php
$page = "report";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MHelper-Final Report</title>
	
	<!-- Load CSS Files -->
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="css/report.css">
	
	<!-- Load Script Files -->
	<script src="js/jquery/jquery.min.js"></script>
	<script src="js/jquery/jquery-ui.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	
</head>
<body>
	<?php require_once("header.php"); ?>
	<div class="container">
		<div class="row">
			<div id="mainbar" class="col-md-8 col-md-offset-2">
				<h4><i class="fa fa-file"></i> Final Project Report</h4>
				<hr class="divider">
				<div class="frame">
					<div class="intro">
						<img src="img/report-logo.png" width="400" alt="logo">
						<div class="pull-right" style="text-align:right">
							<h4>Team Members:</h4>
							<span>Chengchang Qian</span><br/>
							<span>Chengqi Zhu</span><br/>
							<span>Xinying Li</span><br/>
							<span>Xin Liu</span>
						</div>
					</div>
					<div class="report">
						<h4>1. Value Proposition</h4>
						<h5>1.1 Short version</h5>
						<p>Hello hello, I'm final report.</p>
						<h5>1.2 Elaborated version</h5>
						<p></p>
					
						<h4>2. Functional Design</h4>
						<p></p>
					
						<h4>3. Implementation</h4>
						<p></p>
					
						<h4>4. Launch & Management Plan</h4>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php require_once("footer.php"); ?>
	
</body>
</html>