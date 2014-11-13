<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: rgba(248,248,248,0.9);">	
	<div class="container">
		<!-- Navbar -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php" style="padding:8px 15px 7px"><img height="35" src="img/logo-nav.png"/></a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav">
				<li <?php if($page == "home"){?>class="active"<?php }?> ><a href="index.php"><i class="fa fa-home"></i> Explore</a></li>
				<li <?php if($page == "new"){?>class="active"<?php }?> ><a href="newtask.php"><i class="fa fa-plus"></i> New Task</a></li>
				<li <?php if($page == "report"){?>class="active"<?php }?> ><a href="report.php"><i class="fa fa-file"></i> About Mhelper</a></li>
			</ul>

			<form class="navbar-form navbar-left" id="searchBar" role="search">
				<div class="form-group">
					<input type="text" id="searchBox" class="form-control" placeholder="Search">
				</div>
				<a class="btn btn-default" id="searchBtn" style="border-radius: 18px;" onclick="return false;"><i class="fa fa-search"></i></a>
			</form>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="" onclick="return false;"><i class="fa fa-comments" style="font-size:1.3em; margin-right:-15px;"></i></a></li>				
				<li><a href="" onclick="return false;"><i class="fa fa-bell" style="font-size:1.3em;"></i></a></li>
				<?php if(isset($_SESSION['userid'])) {?>
					<li><a href="profile.php" style="padding:0"><img src="<?=$_SESSION['avatar']?>" class="avatar img-rounded"></a</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$_SESSION['username']?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="profile.php"><i class="fa fa-user" style="margin-right:10px;"></i>Profile</a></li>
							<li><a href="#"><i class="fa fa-cog" style="margin-right:10px;"></i>Setting</a></li>
							<li class="divider"></li>
							<li><a href="logout.php"><i class="fa fa-sign-out" style="margin-right:10px;"></i>Logout</a></li>
						</ul>
					</li>
				<?php }?>
				<?php if(!(isset($_SESSION['userid']))) {?>
					<li><a href="profile.php" style="padding:0"><img src="img/avatar.jpg" class="avatar img-rounded"></a</li>
					<li><div><a href="login.php" type="submit" class="btn btn-primary" style="margin: 7px auto; padding: 6px 24px;">Login</a></div></li>
				<?php }?>
			</ul>

		</div><!-- /.navbar-collapse -->
	</div>
</nav>