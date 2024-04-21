<header class="main-header">
 
    <a href="dashboard.php" class="logo">
      <span class="logo-mini"><b>TX</b></span>
      <span class="logo-lg"><b>Tenant X</b>  </span>
    </a>

    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

        <?php
        $adminid=$_SESSION['avmsaid'];
        $ret=mysqli_query($con,"SELECT AdminName from tbladmin where ID='$adminid'");
        $row=mysqli_fetch_array($ret);
        $name=$row['AdminName']; ?>  

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/img-ad.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/img-ad.jpg" class="img-circle" alt="User Image">

                <p>
                <?php echo $name; ?> - Web Developer
                  <small>Member since March 2024</small>
                </p>

              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>   
                  <a href="change-password.php" class="btn btn-default btn-flat">Change Password</a>   
                </div>


                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat"><i class="fa fa-power-off" style="color:red;"></i></a>
                </div>

              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>