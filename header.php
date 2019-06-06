<div class="container-scroller">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="dashboard.php">
                <img src="assests/images/logo.svg" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="dashboard.php">
                <img src="assests/images/logo-mini.svg" alt="logo" />
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize"><span class="menu-icon fa fa-bars"></span></button>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item search-wrapper d-none d-md-block">
                    <form action="#">
                        <div class="form-group mb-0">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="menu-icon fa fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </div>
                    </form>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <div class="dropdown-toggle-wrapper">
                            <div class="inner">
                                <img class="img-xs rounded-circle" src="assests/images/avatar.png" alt="Profile image">
                            </div>
                            <div class="inner">
                                <div class="inner">
                                    <span class="profile-text font-weight-bold">Admin</span>
                                </div>
                                <div class="inner">
                                    <div class="icon-wrapper">
                                        <i class="menu-icon fa fa-angle-down"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a href="profile.php" class="dropdown-item">Profile</a>
                        <a href="logout.php" class="dropdown-item">Sign Out</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="menu-iocn fa fa-bars"></span>
            </button>
        </div>
    </nav>
    
    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
            	</li>
                <li class="nav-item">
                    <a class="nav-link" href="add_teacher.php">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-title">Teacher</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_student.php">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-title">Student</span>
                    </a>
                </li>
            	
            	<li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="menu-icon fa fa-sign-out"></i>
                        <span class="menu-title">Logout</span>
                    </a>
            	</li>
            </ul>
        </nav>
        
        <div class="main-panel">