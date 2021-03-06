
  <header class="main-header">
    <!-- Logo -->
    <a href="../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>FF</b>M</span>
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
               
              <span class="hidden-xs"><?php echo $_SESSION['userName']; ?></span>
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
        <?php if ($_SESSION['role']=="employee"): ?>
          <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-camera"></i>
            <span>Gellary</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="gallery.php"><i class="glyphicon glyphicon-upload"></i> Create Gallery Post</a>
            </li>
            <li>
              <a href="viewGallery.php"><i class="glyphicon glyphicon-eye-open"></i> View Gallery Post</a>
            </li>
          </ul>
        </li>
          <li>
          <a href="emp_verification.php"><i class="glyphicon glyphicon-list"></i>Event verification</a>
        </li>
        <li>
          <a href="all_event_list.php"><i class="glyphicon glyphicon-list"></i> All Event</a>
        </li>
        <?php else: ?>
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
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-camera"></i>
            <span>Gellary</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="gallery.php"><i class="glyphicon glyphicon-upload"></i> Create Gallery Post</a>
            </li>
            <li>
              <a href="viewGallery.php"><i class="glyphicon glyphicon-eye-open"></i> View Gallery Post</a>
            </li>
          </ul>
        </li>  
        <li>
          <a href="approve_event.php"><i class="glyphicon glyphicon-list"></i> Unapprove Event</a>
        </li>
        <li>
          <a href="approve_donation_list.php"><i class="glyphicon glyphicon-list"></i>Unapprove Donation</a>
        </li>
        <li>
          <a href="donation_list.php"><i class="glyphicon glyphicon-list"></i> Donation List</a>
        </li>
        <li>
          <a href="all_event_list.php"><i class="glyphicon glyphicon-list"></i> All Event</a>
        </li>
        <li>
          <a href="user_list.php"><i class="glyphicon glyphicon-list"></i> Employee</a>
        </li>
        <?php endif ?>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>