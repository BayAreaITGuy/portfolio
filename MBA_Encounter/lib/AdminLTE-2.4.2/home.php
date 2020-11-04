<?
// Redirect to the first enabled app
require_once("../../common/common.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SpaceView | Where do you want to go?</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- MicroView CSS using Font Awesome -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/dist/css/microview.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/dist/css/skins/_all-skins.min.css">
  <!--<link rel="stylesheet" href="dist/css/skins/skin-blue-light.min.css">-->
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="../../lib/AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		    <script> 
			$(function(){
			  $("#includedHeader").load("header.php"); 
			  $("#includedFooter").load("footer.php");
			  $("#includedAside").load("asideNav.php");
			  $("#includedControl").load("asideControl.php");
			});
			</script> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!-- Header -->
				<header class="main-header">
					<div id="includedHeader"></div>
				</header>
				
				<div id="includedAside"></div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Where do you want to go?
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

          <!-- Main content -->
		  
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
		  <a href="roomList.php">
            <span class="info-box-icon bg-aqua"><i class="fa fa-cube"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Manage</span>
              <span class="info-box-number">Rooms<small></small></span>
            </div>
            <!-- /.info-box-content -->
			</a>
          </div>
          <!-- /.info-box -->
		  
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
		  <a href="employeeList.php">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Manage</span>
              <span class="info-box-number">Employees<small></small></span>
            </div>
            <!-- /.info-box-content -->
			</a>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
		  <a href="assetsList.php">
            <span class="info-box-icon bg-green"><i class="fa fa-truck"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Receive</span>
              <span class="info-box-number">Assets<small></small></span>
            </div>
            <!-- /.info-box-content -->
			</a>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
		  <a href="equipmentList.php">
            <span class="info-box-icon bg-yellow"><i class="fa fa-fire-extinguisher"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Manage</span>
              <span class="info-box-number">Equipment<small></small></span>
            </div>
            <!-- /.info-box-content -->
			</a>
          </div>
          <!-- /.info-box -->
        </div>
		<div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
		  <a href="furnitureList.php">
            <span class="info-box-icon bg-navy"><i class="fa fa-laptop"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Manage</span>
              <span class="info-box-number">Furniture<small></small></span>
            </div>
            <!-- /.info-box-content -->
			</a>
          </div>
          <!-- /.info-box -->
        </div>
		<div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
		  <a href="fncountsList.php">
            <span class="info-box-icon bg-purple"><i class="fa fa-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Manage</span>
              <span class="info-box-number">Furniture Counts<small></small></span>
            </div>
            <!-- /.info-box-content -->
			</a>
          </div>
          <!-- /.info-box -->
        </div>
		<div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
		  <a href="maintenanceList.php">
            <span class="info-box-icon bg-orange"><i class="fa fa-wrench"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Complete</span>
              <span class="info-box-number">Work<small></small></span>
            </div>
            <!-- /.info-box-content -->
			</a>
          </div>
          <!-- /.info-box -->
        </div>
		<div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
		  <a href="maintenanceGen.php">
            <span class="info-box-icon bg-teal"><i class="fa fa-gear"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Generate</span>
              <span class="info-box-number">Work<small></small></span>
            </div>
            <!-- /.info-box-content -->
			</a>
          </div>
          <!-- /.info-box -->
        </div>
		<div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
		  <a href="partsList.php">
            <span class="info-box-icon bg-maroon"><i class="fa fa-gears"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Manage</span>
              <span class="info-box-number">Parts<small></small></span>
            </div>
            <!-- /.info-box-content -->
			</a>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <div id="includedFooter"></div>
  
  <div id="includedControl"></div>
  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/raphael/raphael.min.js"></script>
<script src="../../lib/AdminLTE-2.4.2/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../lib/AdminLTE-2.4.2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../lib/AdminLTE-2.4.2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/moment/min/moment.min.js"></script>
<script src="../../lib/AdminLTE-2.4.2/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../lib/AdminLTE-2.4.2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../lib/AdminLTE-2.4.2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../lib/AdminLTE-2.4.2/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../lib/AdminLTE-2.4.2/dist/js/demo.js"></script>
</body>
</html>
