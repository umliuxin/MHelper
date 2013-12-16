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
						<p>MHelper is a campus-side social community that promotes the intelligence exchange and collaboration among UM people with diverse backgrounds. It serves as an online platform for any UM people to seek for help on their tasks or provide help with their skills and knowledge. Although it is an online social community, MHelper highly values offline interaction among people to work on tasks together and develop real-life social network.</p>
						<p>MHelper is unique to provide a wide range of specialties, hence a wide range of tasks and skills. Therefore, Helpees can easily get access to the skillsets needed for their tasks, while Helpers can easily find tasks fit for their skillsets and interests. To give credit for Helpers’ effort, their skills and performance will be presented in their profile as proof of competence.</p>
						<h5>1.2 Elaborated version</h5>
						<p>MHelper is a campus-wide social community that promotes the intelligence exchange and collaboration among UM people with diverse backgrounds. It serves as an online platform for any UM people to seek for help on their tasks or provide help with their skills and knowledge. Although it is an online social community, MHelper highly values offline interaction among people to work on tasks together and develop real-life social network.</p>
						<p>Currently, people often seek for help by posting on mailing lists like si.all.open, consulting people from specific groups/clubs, and asking around their acquaintances. However, those approaches are limited by specialty ranges of people that they can reach, and that is especially non-practical for someone seeking for help on some new fields out of the specialty ranges of his/her existing social network. Therefore, a special platform like MHelper can serve to solve this problem by connecting people around the campus with diverse backgrounds.</p>
						<p>On the other hand, UM people can benefit from MHelper not only by posting tasks to ask for help, but also by providing help to others. There are lots of keen people around us willing to help others with their specialties. They can gain sense of self-fulfillment and achievement, improve their skills in the fields in practice, and show their competence in their fields. Moreover, Helpers can expand their social network by participate in this platform, so as to get to know people with other specialties, benefit and learn from each other in different tasks. Since the roles are never fixed, a Helper in one field can be a Helpee in other fields and gain help from others on his/her tasks.</p>
						<p>MHelper contains two main activities: seeking for help and providing help. Thus there are two main roles: Helpees who ask for help and Helper who help others. In this platform, people can post tasks that requires different skills and professions and ask for help publically. Anyone, especially those with the required specialties, can respond to the posts and work on the tasks they feel competent and interested in. For each task, Helpee can review the applicants’ profiles and select one or multiple applicant(s) to approve for working on the task. To motivate Helpers, offline rewards are provided by the corresponding Helpee, and online reputation system is also designed to distinguish people’s participation by quantity and quality.</p>
					
						<h4>2. Functional Design</h4>
						<p>According to our value proposition, there are two basic functions of MHelper: one is seeking for help and the other is providing help. To facilitate users to seek for help, MHelper provides the function to post a new task with title, detailed description, category, skills required, start and end dates, number of Helpers needed, and reward to be expected. Tasks can be searched, filtered and sorted by different options. Anyone who feels competent and interested can apply for a task. To avoid over-recruiting and unclear contribution, approval is needed from the Helpee so as to set up a connection between the Helpee and the Helper(s). A message board is provided on each task for any public or private discussion about it.</p>
						<p>Other than offline rewards provided by Helpees, MHelper provides online incentives through a reputation system with three components: skill endorsement, badge system and user status. Since task completion is a skill-based process and skill is the core value of each Helper, skill endorsement function is provided that the Helpee can endorse any skills of the Helper used in the task after the completion of the task. It can show the competence of the Helper in his/her field so as to be used in another task application and furthermore in the career development. Badges are offered by system when users accomplish some achievements in MHelper, such as the first endorsed skill and 10 endorsements for a skill. User status such as the numbers of completed tasks, posted task and like also shows the activeness of the user.</p>
						<p>To track users’ interaction, sign-in process is needed for actual interaction, although part of the tasks list is visible before signing in. As a platform involving offline interaction, identifying each user is crucial. And since MHelper aims at on-campus interaction within UM, UMID (uniqname) is required to sign-in.</p>
					
						<h4>3. Implementation</h4>
						<p>In this project, Google Accounts Authentication and Authorization API is used for sign-in and sign-out. Because the social interaction in MHelper can involve a lot of offline activities, credibility of identity is essential for users’ safety. Besides, as a campus-wide application, it is reasonable to limit users to people with UM identity. Therefore, UMID (uniqname ) is required to get access to MHelper. As each UMID is associated with a Google account, MHelper asks for an umich-related Google account for each user to sign in.</p>
						<p>As a group project, GitHub is used for distributed collaboration development, since the development work was processed separately and asynchronously. GitHub provides powerful tools to keep the codes up-to-date and prevent potential conflicts. Different branches are used to overcome the problem with different redirect addresses Google Application settings.</p>
						<p>PHP, Apache and MYSQL are the basic web development technology used in this project. Simple data structure was first designed for storing data and building up database on SQL server including task, user and comment boards with valid foreign joined relationship. PHP is used to call the correct content from database and insert or update data into database. Besides, Ajax/jQuery is used to update part of homepage asynchronously, especially for filtering and sorting function.</p>
						
						<h4>4. Future Work</h4>
						<p>Help behavior is essential to MHelper while it is effortful. As a result, stronger incentives are expected. As MHelper encourages skill-oriented interaction, users can show their competence in some fields by their completed tasks as well as skill endorsement. To better make use of that, MHelper is designed to connect with job seeking system, especially UM employment system, so that employers can take the MHelper tasks as part of their consideration. For systems outside UM, MHelper may provide a function for Helpers to export their completed tasks as portfolios for employers to view.</p>
						<p>The quality of task posting and accomplishing is important to MHelper. Mutual evaluation is another important feature for future development. After a task is marked as done by the Helper, the Helpee will be asked to provide feedback on the performance of the Helper, while the Helper will be asked to provide feedback on the quality of the task posting and the reward offering. This function can improve the quality of the contents and completion of tasks and leads to a healthy community culture.</p>

					
						<h4>5. Launch & Management Plan</h4>
						<p>MHelper plans to apply soft launch: it will start from a section of the whole UM campus – School of Information (UMSI) – and a section of categories such as programming. According to the interactions in the mailing list si.all.open, UMSI is chosen as an active community and programming is a hot field with many help seeking requests.</p>
						<p>MHelper, designed as a campus-wide intelligence exchange platform, envision a self-sustaining status where a task in any field can be helped in a reasonable time. The critical mass should be a balance of the two main roles – Helpers and Helpees. Since the range of specialties is important to the performance of MHelper, the critical mass is expected to cover a range wide enough.</p>
						<p>Although it is a campus-wide system, which makes it simpler than larger-ranged community, bad behavior still needs to be taken into consideration. So far, the following kinds of bad behavior are considered as possibly common in MHelper system: (1) posting low-quality tasks such as tasks with inadequate details; (2) posting inappropriate tasks such as asking help to finish an exam; (3) (Helpees) breaking promise of rewards; (4) faking tasks, maybe in pair or team to cheat for higher reputation; (5) repeatedly posting the same task; and (6) any spammer and troll behavior.</p>
						<p>MHelper can avoid some of possible bad behaviors by requesting UMID as identity base, so that there is no way for whitewashing or sock puppet. The reputation system is also an approach to control bad behavior. A user’s reputation is visible to others in MHelper, so any bad behavior will lead to decrease in reputation which will be visible to other users interacting with him/her. MHelper will also apply natural language processing (NLP) to avoid duplicate posts. Moreover, there will be some community managers monitoring the system. They can ban bad users temporarily or permanently. User reporting will also be enabled for self-monitoring of the community.</p>
						
						<h4>Reference</h4>
						<p>[1] Crumlish, Christian and Malone, Erin. Designing Social Interfaces. O’Reilly Media. 2009. Chapter 3: You’re Invited</p>
						<p>[2] Bell, Gavin. Building Social Web Applications. O’Reilly Media. 2009. Chapter 15: Managing Communities, Chapter 18: Launching, Marketing, and Evolving Social Applications</p>
						<p>[3] Farmer, F. Randall, and Glass, Bryce. Building Web Reputation Systems. 2010. O’Reilly Media. Chapter 3: Building Blocks and Reputation Tips</p>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php require_once("footer.php"); ?>
	
</body>
</html>