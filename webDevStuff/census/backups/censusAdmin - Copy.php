<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Census Admin v5</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.min.css"> 
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/plugins/iCheck/all.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">					 
  <!-- Theme style -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/dist/css/skins/skin-blue.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/dist/css/skins/_all-skins.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
	@media screen and (min-width: 768px) {
        .modal-dialog {
          width: 700px; /* New width for default modal */
        }
        .modal-sm {
          width: 350px; /* New width for small modal */
        }
    }
    @media screen and (min-width: 992px) {
        .modal-lg {
          width: 950px; /* New width for large modal */
        }
    }
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
	
	.switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 24px;
	}

	.switch input {
		display: none;
	}

	.slider.round {
		border-radius: 24px;
	}

	.slider {
		position: absolute;
		cursor: pointer;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background-color: #ccc;
		-webkit-transition: .4s;
		transition: .4s;
	}

	.slider.round:before {
		border-radius: 50%;
	}

	.slider:before {
		position: absolute;
		content: "";
		height: 22px;
		width: 22px;
		left: 1px;
		bottom: 1px;
		background-color: white;
		-webkit-transition: .4s;
		transition: .4s;
	}
		input:not([type="image" i]) {
		box-sizing: border-box;
	}

	input[type="checkbox" i] {
		background-color: initial;
		cursor: default;
		-webkit-appearance: checkbox;
		box-sizing: border-box;
		margin: 3px 3px 3px 4px;
		padding: initial;
		border: initial;
	}

	input:checked + .slider {
		background-color: #5fdc57;
	}
	
	input:checked + .slider:before {
		-webkit-transform: translateX(26px);
		-ms-transform: translateX(26px);
		transform: translateX(26px);
	}

		
	p {
    word-break: break-word;
    white-space: normal;
	}

	.wrap {
    word-break: break-word;
    white-space: normal;
	}

	.wrap-text {
    word-break: break-word;
    white-space: normal;
	}
</style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
|Button OPTIONS | btn btn-block btn-primary btn-xs        |
|               | btn-default btn-danger btn-warning      |
|               |                                         |
|               |                                         |
|               |                                         |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>V</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Space View Census</span>
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

          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>

	<aside class="main-sidebar"  style="display:block;">
    <!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
		<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu tree" data-widget="tree">
				<li class="treeview">
					<ul class="tree treeview-menu" style="display: block;">
						<li class="treeview menu">
							<h4 href="#" style="color: #ffffff;">
							<p style="margin-left: 15px">General Info</p>
							</h4>
							
							<table cellpadding="0" cellspacing="0" border="0" style="color: #ffffff; margin-left: 15px">
								<tbody class="wrap">
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">Census ID:</td>
										<td class="censusPanelValue">CENSUS-20190827</td>
									</tr>
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">Name:</td>
										<td class="censusPanelValue">ng</td>
									</tr>
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">Start Date:</td>
										<td class="censusPanelValue">08/27/2019</td>
									</tr>
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">End Date:</td>
										<td class="censusPanelValue">08/28/2019</td>
									</tr>
								</tbody>
							</table>
							<button type="button" class="btn btn-block btn-primary btn-xs col-sm-2" style="margin: 5px 10px 10px 15px; width: 90%;" data-toggle="modal" data-target="#modal-edit">
								Edit
							</button>

							<table cellpadding="0" cellspacing="0" border="0" style="color: #ffffff; margin-left: 15px">
								<tbody class="wrap-text">
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">Email To Send:</td>
										<td>
											<div class="dropdown">
											  <button class="btn btn-primary dropdown-toggle btn-xs " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												-- Select Email Type --
											  </button>
											  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#" style="color:#000000;">ACT_LOG_IMPORT</a><br>
												<a class="dropdown-item" href="#" style="color:#000000;">CENSUS</a><br>
												<a class="dropdown-item" href="#" style="color:#000000;">MOVE_NOTICE</a><br>
												<a class="dropdown-item" href="#" style="color:#000000;">MOO_COORD_NEW</a><br>
											  </div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
							<button type="button" class="btn btn-block btn-primary btn-xs col-sm-2" style="margin: 5px 10px 10px 15px; width: 90%;">
								<a href="censusConfirm.html" style="color: #ffffff; !Important">Send Email to Employees</a>
							</button>

							<br><br>

							<h4 href="#" style="color: #ffffff;">
							<p style="margin-left: 15px">Update Employee Space Data</p>
							</h4>
							
							<h6 href="#" style="color: #ffffff;">
								<p style="margin-left: 15px">Commits ALL employee location information for rows with a status of LOC_CHANGED, LOC_UNKNOWN or WALKTHROUGH</p>
							</h6>
							<button type="button" class="btn btn-block btn-primary btn-xs col-sm-2" style="margin: 5px 10px 10px 15px; width: 90%;">
									<a href="censusConfirm.html" style="color: #ffffff; !Important">Update All Employee Locations</a>
							</button>

							<br><br>
							
							<h4 href="#" style="color: #ffffff;">
								<p style="margin-left: 15px">Employee Response</p>
							</h4>

							<table cellpadding="0" cellspacing="0" border="0" style="color: #ffffff; margin-left: 15px">
								<tbody>
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">Total&nbsp;Employees:</td>
										<td class="censusPanelValue pull-right">1893</td>
									</tr>
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">Responded:</td>
										<td class="censusPanelValue pull-right">0 (0%)</td>
									</tr>
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">Location&nbsp;Correct:</td>
										<td class="censusPanelValue pull-right">0 (0%)</td>
									</tr>
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">Location&nbsp;Changed:</td>
										<td class="censusPanelValue pull-right">0 (0%)</td>
									</tr>
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">Location&nbsp;Unknown:</td>
										<td class="censusPanelValue pull-right">0 (0%)</td>
									</tr>
									<tr>
										<td class="censusPanelAttribute" width="75" style="color: #999999;">Application&nbsp;Error:</td>
										<td class="censusPanelValue pull-right">0 (0%)</td>
									</tr>
								</tbody>
							</table>
							
								<button type="button" class="btn btn-block btn-primary btn-xs col-sm-2" style="margin: 5px 10px 10px 15px; width: 90%;">
									<a href="censusList.php" style="color: #ffffff; !Important">Return to Census List</a>
								</button>
						</li>

					</ul>

				</li>
			</ul>
		  <!-- /.sidebar-menu -->
		</section>
    <!-- /.sidebar -->
    </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Census Admin
      </h1>
    </section>
    <!-- Main content section **********-->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

		
<!--------------------------
        | START OF MODALS HERE              |
          ----------------------------------->		
		<!-- Create New Census modal -->
		<div class="modal modal-defualt fade" id="modal-edit">
            <div class="modal-dialog">
                <div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Census</h4>
					</div>
					<div class="modal-body">
						<div class="box box-default no-border">
							<!-- form start -->
							<form class="form-horizontal">
								<div class="box-body">
									<!-- Census Name -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Census Name:</label>
										<div class="input-group col-sm-10">
											<input type="text" class="form-control pull-right" id="returnGroupInput" placeholder="Enter census name..." required>
										</div>
									</div>
									
									<!-- /.form group -->
									<!-- Census Start Date -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Census Start Date:</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" class="form-control pull-right col-sm-10" id="datepicker" placeholder="mm/dd/yyyy">
										</div>
										<!-- /.input group -->
									</div>
									  <!-- /.form group -->
									<!-- Census End Date -->
									<div class="form-group">
										<label class="col-sm-2 control-label">Census End Date:</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" class="form-control pull-right col-sm-10" id="datepicker2" placeholder="mm/dd/yyyy">
										</div>
										<!-- /.input group -->
									</div>
									<!-- /.form group --> 
									<!-- Status start -->
									<div class="form-group">
									  <label for="nameGroupInput" class="col-sm-2 control-label">Census Status:</label>
									  <div class="input-group col-sm-10">
										<input type="text" class="form-control" id="nameGroupInput" placeholder="Enter status...">
									  </div>
									</div>
									<!-- /.form group -->
									<!-- Description start -->
									<div class="form-group">
									  <label for="nameGroupInput" class="col-sm-2 control-label">Description:</label>
									  <div class="input-group col-sm-10">
										<input type="text" class="form-control" id="nameGroupInput" placeholder="Enter description...">
									  </div>
									</div>
									<!-- /.form group --> 
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary pull-right">Update Census</button>
								</div>
								<!-- /.box-footer -->
							</form>
							<!-- /.form group -->
						</div>
					</div>
				</div>
            </div>
        </div>
		


		<!--------------------------
        | End OF MODALS HERE              |
          ----------------------------------->	
		
		<!--------------------------
		| Census Admin No Search top tab start            |
		----------------------------------->
		<div class="tab-pane" id="tab_no_search">
			<div class="row">
				<div class="col-sm-12">
					<div class="box no-border">
						<div class="box-body">
						   <table table id="no_search" class="table table-bordered table-striped">
								<thead>
								<tr>
								  <th>Email</th>
								  <th>Employee Name</th>
								  <th>Em#</th>
								  <th>Status</th>
								  <th>New Bl</th>
								  <th>New Fl</th>
								  <th>New Rm</th>
								  <th>Bl</th>
								  <th>Fl</th>
								  <th>Rm</th>
								  <th>Comment</th>
								  <th>Action</th>
								</tr>
								</thead>
								<tbody>
									<tr  role="row" class="odd shown">
									  <td>
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
									  </td>
									  <td>ABBER, JOAN</td>
									  <td>908121</td>
									  <td>New</td>
									  <td></td>
									  <td></td>
									  <td></td>
									  <td>HQ</td>
									  <td>18</td>
									  <td>102</td>
									  <td></td>
									  <td data-title="Action">
											<button type="button" class="btn btn-block btn-danger btn-xs">
													<a href="" style="color: #ffffff; !Important"><span> Remove </span></a>
											</button>
									  </td>
									</tr>
									<tr  role="row" class="odd shown">
									  <td>
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
									  </td>
									  <td>ABBOT, PAUL</td>
									  <td>54021</td>
									  <td>New</td>
									  <td></td>
									  <td></td>
									  <td></td>
									  <td>HQ</td>
									  <td>17</td>
									  <td>101</td>
									  <td></td>
									  <td data-title="Action">
											<button type="button" class="btn btn-block btn-danger btn-xs">
													<a href="" style="color: #ffffff; !Important"><span> Remove </span></a>
											</button>
									  </td>
									</tr>
									<tr  role="row" class="odd shown">
									  <td>
											<input type="checkbox" class="form-check-input" id="exampleCheck1">
									  </td>
									  <td>ABER, GINGER</td>
									  <td>N/A</td>
									  <td>New</td>
									  <td></td>
									  <td></td>
									  <td></td>
									  <td>HQ</td>
									  <td>17</td>
									  <td>105</td>
									  <td></td>
									  <td data-title="Action">
											<button type="button" class="btn btn-block btn-danger btn-xs">
													<a href="" style="color: #ffffff; !Important"><span> Remove </span></a>
											</button>
									  </td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
									  <th>Email</th>
									  <th>Employee Name</th>
									  <th>Em#</th>
									  <th>Status</th>
									  <th>New Bl</th>
									  <th>New Fl</th>
									  <th>New Rm</th>
									  <th>Bl</th>
									  <th>Fl</th>
									  <th>Rm</th>
									  <th>Comment</th>
									  <th>Action</th>
									</tr>
								</tfoot>
							  </table>
						</div>
						<!-- end box body -->
					</div>
				</div>
			</div>	
		</div>
		<!--------------------------
		| Census Admin No Search top tab end            |
		----------------------------------->

		<!--------------------------
        |  Census Admin Search bot tab start            |
          ----------------------------------->
		<div class="tab-content">
			<div class="tab-pane active" id="tab_search">
				<div class="row">
					<div class="col-sm-12">
					    <div class="box no-border">
							<div class="box-body">
							   <table table id="search" class="table table-bordered table-striped">
									<thead>
									<tr> 
									  <th>Employee Name</th>
									  <th>Employee #</th>
									  <th>Building</th>
									  <th>Floor</th>
									  <th>Room</th>
									  <th>Division</th>
									  <th>Department</th>
									  <th>Action</th>
									</tr>
									</thead>
									<tbody>
										<tr  role="row" class="odd shown">
										  <td>ABER, GINGER</td>
										  <td>908121</td>
										  <td>HQ</td>
										  <td>18</td>
										  <td>102</td>
										  <td>Electronic Sys.</td>
										  <td>Engineering</td>
										  <td data-title="Action">
												<button type="button" class="btn btn-block btn-success btn-xs">
														<a href="" style="color: #ffffff; !Important"><span> In Project </span></a>
												</button>
										  </td>
										</tr>
										<tr  role="row" class="odd shown">
										  <td>ABER, GINGER</td>
										  <td>908121</td>
										  <td>HQ</td>
										  <td>18</td>
										  <td>102</td>
										  <td>Electronic Sys.</td>
										  <td>Engineering</td>
										  <td data-title="Action">
												<button type="button" class="btn btn-block btn-success btn-xs">
														<a href="" style="color: #ffffff; !Important"><span> In Project </span></a>
												</button>
										  </td>
										</tr>
									    <tr  role="row" class="odd shown">
										  <td>ABER, GINGER</td>
										  <td>908121</td>
										  <td>HQ</td>
										  <td>18</td>
										  <td>102</td>
										  <td>Electronic Sys.</td>
										  <td>Engineering</td>
										  <td data-title="Action">
												<button type="button" class="btn btn-block btn-success btn-xs">
														<a href="" style="color: #ffffff; !Important"><span> In Project </span></a>
												</button>
										  </td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
										  <th>Employee Name</th>
										  <th>Employee #</th>
										  <th>Building</th>
										  <th>Floor</th>
										  <th>Room</th>
										  <th>Division</th>
										  <th>Department</th>
										  <th>Action</th>
										</tr>
									</tfoot>
								  </table>
							</div>
							<!-- end box body -->
						</div>
					</div>
				</div>	
			</div>
			<!--------------------------
			| Census Admin Search bot tab end            |
			----------------------------------->

			
		</div>
	</div>
	</section>
  </div>
  <!-- /.content section main**********-->
</div>
<!-- /.content-wrapper full page -->
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../lib/AdminLTE-2.4.2/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../lib/AdminLTE-2.4.2/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- date-range-picker -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/moment/min/moment.min.js"></script>
<script src="../../lib/AdminLTE-2.4.2/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../lib/AdminLTE-2.4.2/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../lib/AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../lib/AdminLTE-2.4.2/dist/js/demo.js"></script>

<!-- Page script -->
<script>
  $(function () {
  
	// On tab change event handler - made by Kerry M.
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		if (e.target.innerHTML == "Scenario")
			$('#mysidebar').load("scenarioSidebar.php")		
		else			
			$('#mysidebar').load('../../asideNav.php')			
	})

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
    //color picker with addon
    $('.my-colorpicker2').colorpicker()
	
	//Date range picker
    $('#reservation').daterangepicker()
	
	 //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
	$('#datepicker2').datepicker({
      autoclose: true
    })
	
	//$('#searchTable').DataTable()
    $('#scenarioModalTable').DataTable({	
    })
	
	$('#search').DataTable({	
    })
	$('#currentTable').DataTable({	
    })
	$('#archivedTable').DataTable({	
    })
	
});

</script>				 
</body>
</html>