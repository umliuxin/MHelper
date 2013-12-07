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
			<a class="navbar-brand" href="index.php">MHelper</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<ul class="nav navbar-nav">
				<li <?php if($page == "home"){?>class="active"<?php }?> ><a href="index.php"><i class="fa fa-home"></i> Explore</a></li>
				<li <?php if($page == "new"){?>class="active"<?php }?> ><a href="newtask.php"><i class="fa fa-plus"></i> New Task</a></li>
			</ul>

			<form class="navbar-form navbar-left" id="searchBar" role="search">
				<div class="form-group">
					<input type="text" id="searchBox" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default" id="searchBtn"><i class="fa fa-search"></i></button>
			</form>

			<ul class="nav navbar-nav navbar-right">
				<li><img src="img/avatar.jpg" class="avatar"></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Chengqi Zhu<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="profile.php"><i class="fa fa-user" style="margin-right:10px;"></i>Profile</a></li>
						<li><a href="#"><i class="fa fa-cog" style="margin-right:10px;"></i>Setting</a></li>
						<li class="divider"></li>
						<li><a href="login.php"><i class="fa fa-sign-out" style="margin-right:10px;"></i>Logout</a></li>
					</ul>
				</li>
			</ul>

		</div><!-- /.navbar-collapse -->
	</div>
</nav>