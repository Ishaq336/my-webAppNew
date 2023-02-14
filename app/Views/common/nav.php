<body>
	

		<div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
			<div class="container">
				<!-- Menu button for smallar screens -->
				<div class="navbar-header">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
    </button>
                    <a href="admin/admin_home" class="navbar-brand"><span class="bold">My Project in Codeigniter</span></a>
				</div>
				
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">     
					<!-- Links -->
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">            
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">User <b class="caret"></b></a>
							<!-- Dropdown menu -->
							<ul class="dropdown-menu">
				<li><a href="Admin/update_user"><i class="fa fa-cogs"></i> Settings</a></li>
				<li><a href="logout"><i class="fa fa-power-off"></i> Logout</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Main content starts -->
		<div class="content">
			<!-- Sidebar -->
			<div class="sidebar">
				<div class="sidebar-dropdown"><a href="#">Navigation</a></div>
				<div class="sidebar-inner">
				    <div class="sidebar-widget">
						
					</div>
					<ul class="navi">
						<li class="nblue"><a href="admin_home"><i class="fa fa-desktop"></i> Dashboard</a></li>
						
						
    <li class="has_submenu nblue">
        <a href="logout">
            <i class="fa fa-user"></i> User
            <span class="pull-right"><i class="fa fa-angle-right"></i></span>
        </a>
        <ul>
            <li><a href="Admin/update_user">Change Password</a></li>
            <li><a href="logout">Logout</a></li>
        </ul>
    </li> 
						
					</ul>
					<!--/ Sidebar navigation -->
				</div>
			</div>
			<!-- Sidebar ends -->