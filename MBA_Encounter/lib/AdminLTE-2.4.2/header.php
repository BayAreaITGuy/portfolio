<!DOCTYPE html>
<?
require_once("../../common/common.php");
?>

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?= config('baseUrl') ?>/home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="font-size: 1.0em !Important;"><b>SV</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Space<b>View</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar
              <img src="dist/img/bob1.png" class="user-image" alt="User Image">-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Bob Stephen</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu
              <li class="user-header">
                <img src="dist/img/bob1.png" class="img-circle" alt="User Image">

                <p>
                  Bob Stephen - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>-->
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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