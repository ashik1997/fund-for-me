
  <header class="main-header">
    <!-- Logo -->
    <a href="../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>N</b>N</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>FFM</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a >
              <span class='glyphicon glyphicon-user' ></span>
               
              <span class="hidden-xs"><?php echo $_SESSION['uEmail']; ?></span>
            </a>
          </li>
          <li class="dropdown user user-menu">
            <a href="logOut.php" class="btn btn-flat"><i class="fa fa-sign-out"></i>Sign Out</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class=" menu">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-bullhorn"></i>
            <span>Event</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="createNewPost.php"><i class="glyphicon glyphicon-upload"></i> Create New Post</a>
            </li>
            <li>
              <a href="viewPost.php"><i class="glyphicon glyphicon-eye-open"></i> View Post</a>
            </li>
          </ul>
        </li>
        <li><a href="own_donation.php"><i class="glyphicon glyphicon-list"></i> Own Donation</a></li>
        
        
         

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>