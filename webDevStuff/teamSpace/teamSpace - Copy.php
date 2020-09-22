<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Team Space v5</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.min.css"> 
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../lib/AdminLTE-2.4.2/bower_components/Ionicons/css/ionicons.min.css">
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
      <span class="logo-lg">Space View</span>
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
  <!-- Left side column. contains the logo and sidebar -->
    <div id="mysidebar">
	<?
	include '../../asideNav.php';
	?>
	</div>
	<!-- sidebar holder div -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Team Space
      </h1>
    </section>
    <!-- Main content section **********-->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

	<div class="nav-tabs-custom">
		<ul class="nav nav-tabs">
			<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-team">
					Create New Team Space
			</button>
		  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Search</a></li>
		  <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Update</a></li>
		  <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Scenario</a></li>
		</ul>
		
		<!--------------------------
        | START OF MODALS HERE              |
          ----------------------------------->		
		<!-- new team modal -->
		<div class="modal modal-defualt fade" id="modal-team">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Team Space:</h4>
              </div>
              <div class="modal-body">
                <div class="box box-default no-border">
					<!-- form start -->
					<form class="form-horizontal">
					  <div class="box-body">
						<div class="form-group">
						  <label for="returnGroupInput" class="col-sm-2 control-label">Team</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="returnGroupInput" placeholder="Enter team name..." required>
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="nameGroupInput" class="col-sm-2 control-label">Description:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="nameGroupInput" placeholder="Enter description...">
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="descGroupInput" class="col-sm-2 control-label">Team Contact:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="descGroupInput" placeholder="Enter description...">
						  </div>
						</div>
						<!-- Color Picker -->
						  <div class="form-group">
							 <label class="col-sm-2 control-label">Highlight:</label> 
								<td>
									<button type="button" class="btn btn-primary btn-xs col-xs-5" style="margin: 10px 10px 10px 10px;">
										<a href="" style="color: #ffffff; !Important">Highlight Color</a>
									</button>
							    </td>
							<!-- /.input group -->
						  </div>
						<!-- /.form group -->
					  </div>
						<!-- /.form group -->
					  </div>
					  <!-- /.box-body -->
					  <div class="box-footer">
						<button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary pull-right">Save</button>
					  </div>
					  <!-- /.box-footer -->
					</form>
				  </div>
              </div>
            </div>
          </div>
		
		<!-- new scenario modal -->
		<div class="modal modal-defualt fade" id="modal-scenario">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Scenario:</h4>
              </div>
              <div class="modal-body">
                <div class="box box-default no-border">
					<!-- form start -->
					<form class="form-horizontal">
					  <div class="box-body">
						<div class="form-group">
						  <label for="returnGroupInput" class="col-sm-2 control-label">Scenario Code:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="returnGroupInput" placeholder="Enter team name..." required>
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="nameGroupInput" class="col-sm-2 control-label">Description:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="nameGroupInput" placeholder="Enter description...">
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="nameGroupInput" class="col-sm-2 control-label">Clone Scenario From:</label>
						  <div class="col-sm-10">
							  <select class="form-control" required>
								<option>-- Blank --</option>
								<option>Current Live Team Definitions</option>
								<option>Allison Restack 2nd Floor</option>
								<option>Ambers Block Plan</option>
							  </select>
						  </div>
						</div>
					  </div>
						<!-- /.form group -->
					  </div>
					  <!-- /.box-body -->
					  <div class="box-footer">
						<button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary pull-right">Create New Scenario</button>
					  </div>
					  <!-- /.box-footer -->
					</form>
				  </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /. new scenario modal eend-->
		  
		  <!-- new floor plan modal -->
		<div class="modal modal-defualt fade" id="modal-f-p">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Floor Plan:</h4>
              </div>
              <div class="modal-body">
                <div class="box box-default no-border">
					<!-- form start -->
					<form class="form-horizontal">
					  <div class="box-body">
						<div  style="height: 100%; width: 100%; text-align: center;">
									<img src="images/floor18.png" Width="100%" alt="" style="max-width:800px;">
						</div>
					  </div>
						<!-- /.form group -->
					  </div>
					  <!-- /.box-body -->
					</form>
				  </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /. new floor plan modal -->
		  
		  <!-- team summary modal -->
		<div class="modal modal-defualt fade" id="modal-t-sum">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Team Summary:</h4>
              </div>
              <div class="modal-body">
                <div class="box box-default no-border">
					<!-- form start -->
					<form class="form-horizontal">
					  <div class="box-body">
						<div class="form-group">
						  <label for="returnGroupInput" class="col-sm-2 control-label">Team:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="returnGroupInput" placeholder="ACCOUNTING" disabled>
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="nameGroupInput" class="col-sm-2 control-label" >Description:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="nameGroupInput" placeholder="Accounting Team" disabled>
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="nameGroupInput" class="col-sm-2 control-label">Team Contact:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="nameGroupInput" placeholder="ABBERNAT, JOAN" disabled>
						  </div>
						</div>
						
						<div class="form-group">
							<label for="nameGroupInput" class="col-sm-2 control-label">Highlight:</label>
							<div class="col-sm-10">
								<button type="button" class="btn btn-block btn-primary  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
									<a href="" style="color: #ffffff; !Important">Highlight Color</a>
								</button>
							</div>
						</div>
						
					  </div>
						<!-- /.form group -->
					  </div>
					  <!-- /.box-body -->
					</form>
				  </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /. team summary modal -->
		  
		  <!-- Team Edit modal -->
		<div class="modal modal-defualt fade" id="modal-t-edit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Team Edit:</h4>
              </div>
              <div class="modal-body">
                <div class="box box-default no-border">
					<!-- form start -->
					<form class="form-horizontal">
					  <div class="box-body">
							<div class="form-group">
						  <label for="returnGroupInput" class="col-sm-2 control-label">Team:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="returnGroupInput" placeholder="ACCOUNTING" disabled>
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="nameGroupInput" class="col-sm-2 control-label" >Description:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="nameGroupInput" placeholder="Accounting Team" >
						  </div>
						</div>
						
						<div class="form-group">
						  <label for="nameGroupInput" class="col-sm-2 control-label">Team Contact:</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control" id="nameGroupInput" placeholder="ABBERNAT, JOAN" >
						  </div>
						</div>
						
						<div class="form-group">
							<label for="nameGroupInput" class="col-sm-2 control-label">Highlight:</label>
							<div class="col-sm-10">
								<button type="button" class="btn btn-block btn-primary  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
									<a href="" style="color: #ffffff; !Important">Highlight Color</a>
								</button>
							</div>
						</div>
						
			
					  </div>
						<!-- /.form group -->
					  </div>
					  <!-- /.box-body -->
					  <div class="box-footer">
						<button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary pull-right">Save</button>
						<button type="submit" class="btn btn-danger pull-right" style="margin-right:5px;">Delete</button>
					  </div>
					  <!-- /.box-footer -->
					</form>
				  </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /. team edit modal -->

		<!-- scenario list modal -->
		<div class="modal modal-defualt" id="modal-list">
            <div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span></button>
						<!--<h4 class="modal-title">Scenario list</h4> -->
					</div>
					<div class="modal-body">
						<div class="box box-default no-border">
							<!-- form start -->
							<form class="form-horizontal">
								<section class="content">
							<div class="row">
								<div class="col-sm-12">
									<div class="box no-border">
									<!-- /.box-header -->
									<div class="box-header">
									  <h3 class="box-title">Scenario Floorplan Summary</h3>
									</div>
									<div class="box-body">
									  <table id="scenarioModalTable" class="table table-bordered table-striped">
										<thead>
										<tr>
										  <th>Team</th>
										  <th>Team Description</th>
										  <th>Building</th>
										  <th>Floor</th>
										  <th>Highlight Color</th>
										  <th>Room Count</th>
										</tr>
										</thead>
										<tbody>
										<tr  role="row" class="odd shown">	
									  <td>Accounting</td>
									  <td>Accounting Team</td>
									  <td>BOSMED</td>
									  <td>03</td> 
									  <td>
										<button type="button" class="btn btn-block btn-primary  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
											<a href="" style="color: #ffffff; !Important">Highlight Color</a>
										</button>
									  </td>
									  <td>2</td>
									</tr>
									<tr  role="row" class="odd shown">	
									  <td>Accounting</td>
									  <td>Accounting Team</td>
									  <td>BOSMED1</td>
									  <td>02</td> 
									  <td>
										<button type="button" class="btn btn-block btn-warning  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
											<a href="" style="color: #ffffff; !Important">Highlight Color</a>
										</button>
									  </td>
									  <td>4</td>
									</tr>
									<tr  role="row" class="odd shown">	
									  <td>Accounting</td>
									  <td>Accounting Team</td>
									  <td>BOSMED2</td>
									  <td>01</td> 
									  <td>
										<button type="button" class="btn btn-block btn-danger  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
											<a href="" style="color: #ffffff; !Important">Highlight Color</a>
										</button>
									  </td>
									  <td>25</td>
									</tr>
										</tbody>
										<tfoot>
											<tr>
											  <th>Team</th>
											  <th>Team Description</th>
											  <th>Building</th>
											  <th>Floor</th>
											  <th>Highlight Color</th>
											  <th>Room Count</th>
											</tr>
										</tfoot>
									  </table>
									</div>
									<!-- /.box-body -->
								  </div>
								</div>
							</div>
						</section>
						<!-- /.scenario list floorplan summary content end-->
						<!-- scenario map start-->
						<section class="content">
							<div class="row">
								<div class="col-xs-12">
								  <div class="box">
									<div class="box-header" style="background: #E3FDE3; !Important">
									  <h3 class="box-title" >Map for: Accounting TEAM</h3>
										  <div class="pull-right box-tools">
											<!-- switch and styles from http://demo.rsc2lc.com/spaceview_v3/V3/locator/team.php?cmd=2 -->
											<div class="form-group">
												<div class="btn-group">
													
														<div class="dropdown pull-left" style="margin-right:5px;">	
															<button type="button" class="btn btn-default btn-xs dropdown-toggle"  data-toggle="dropdown" 
																aria-haspopup="true" aria-expanded="true"  >Active Team: <span class="caret"></span>
															</button>
															<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu874796">
																<li class="dropdown-item">
																	<button type="button" class="btn btn-primary" >
																	Select Team
																	</button>
																</li>
																<li class="dropdown-item">
																	<button type="button" class="btn btn-danger" >
																	Remove Team
																	</button>
																</li>
																<li  class="dropdown-item">
																	<button type="button" class="btn btn-default" >
																	Accounting Team
																	</button>
																</li>
																<li  class="dropdown-item">
																	<button type="button" class="btn btn-default" >
																	Marketing Team
																	</button>
																</li>
																<li  class="dropdown-item">
																	<button type="button" class="btn btn-default" >
																	Operations Team
																	</button>
																</li>
															</ul>
														</div>
													
													<p class="pull-left" style="margin-right: 5px;">Select Multiple Rooms? </p>
													<!--<p>Select&nbsp;Multiple&nbsp;Rooms?</p>-->
													<div class="switch pull-left">
														<input type="checkbox" class="custom-control-input" id="customSwitches" style="margin-left: 5px;">	
															<label class="switch">
																<input type="checkbox" onclick="javascript:parent.detailFrame.setClickMode();">
																<span class="slider round"></span>  
															</label>	
														</div>
													<button type="button" class="btn btn-primary btn-sm" onclick="zoomInFloor()" data-toggle="dropdown" style="margin-left: 5px;"><i class="fa fa-plus" title="Zoom In"></i></button>
													<button type="button" class="btn btn-primary btn-sm" onclick="zoomOutFloor()" data-toggle="dropdown" style="margin-left: 5px;"><i class="fa fa-minus" title="Zoom Out"></i></button>
													<button type="button" class="btn btn-primary btn-sm" onclick="centerFloor()" data-toggle="dropdown" style="margin-left: 5px;"><i class="fa fa-compress" title="Re-Center"></i></button>		
													<button type="button" class="btn btn-primary btn-sm pull-right" style="margin-left: 5px;"><i class="fa fa-fw fa-print"></i></button>
												</div>
											</div>
										  </div>
									</div>
									<!-- /.box-header -->
									<div class="box-body">
									  <div  style="height: 100%; width: 100%;">
										<img src="images/floor18.png" Width="100%" alt="">
									  </div>
									</div>
								  </div>
								</div>
								<!-- /.scenario map end-->
							</div>
						</section>
							  <!--  start box-footer -->
								<div class="box-footer">
									<button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
								</div>
							  <!-- /.end box-footer -->
							</form>
						</div>
					</div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
         <!-- /. list modal end-->
		<!--------------------------
        | End OF MODALS HERE              |
          ----------------------------------->	
		
		<!--------------------------
        | Search tab start            |
          ----------------------------------->
		<div class="tab-content">
			<div class="tab-pane active" id="tab_1">
				<!-- search table start -->
				<div class="row">
					<div class="col-sm-12">
					    <div class="box no-border">
							<div class="box-body">
							  <table id="searchTable" class="table table-bordered table-striped">
								<thead>
								<tr>
								  <th>Team</th>
								  <th>Description</th>
								  <th>Building</th>
								  <th>Floor</th>
								  <th>Highlight Color</th>
								  <th>Room&nbsp;Count</th>
								</tr>
								</thead>
								<tbody>
								<!-- action dropdown from table in http://demo.rsc2lc.com/spaceview/V5/apps/locator/employee.php  -->
								<tr  role="row" class="odd shown">	
								  <td>Accounting</td>
								  <td>Accounting Team</td>
								  <td>BOSMED</td>
								  <td>03</td> 
								  <td>
									<button type="button" class="btn btn-block btn-primary  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
										<a href="" style="color: #ffffff; !Important">Highlight Color</a>
									</button>
								  </td>
								  <td>2</td>
								</tr>
								<tr  role="row" class="odd shown">	
								  <td>Accounting</td>
								  <td>Accounting Team</td>
								  <td>BOSMED1</td>
								  <td>02</td> 
								  <td>
									<button type="button" class="btn btn-block btn-warning  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
										<a href="" style="color: #ffffff; !Important">Highlight Color</a>
									</button>
								  </td>
								  <td>4</td>
								</tr>
								<tr  role="row" class="odd shown">	
								  <td>Accounting</td>
								  <td>Accounting Team</td>
								  <td>BOSMED2</td>
								  <td>01</td> 
								  <td>
									<button type="button" class="btn btn-block btn-danger  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
										<a href="" style="color: #ffffff; !Important">Highlight Color</a>
									</button>
								  </td>
								  <td>25</td>
								</tr>
								</tbody>
								<tfoot>
									<tr>
								  <th>Team</th>
								  <th>Description</th>
								  <th>Building</th>
								  <th>Floor</th>
								  <th>Highlight Color</th>
								  <th>Room Count</th>
								</tr>
								</tfoot>
							  </table>
							</div>
							<!-- end box body -->
						</div>
					</div>
				</div>	
				  <!-- /.box -->
				 <!-- Search Map start-->
				 <section class="content">
						<div class="row">
							<div class="col-xs-12">
						        <div class="box">
								<div class="box-header" style="background: #E3FDE3; !Important">
									<div class="box-tools">
										<div class="form-group">
												<button type="button" class="btn btn-primary btn-sm dropdown-toggle"  data-toggle="dropdown" 
													aria-haspopup="true" aria-expanded="true">View: <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu874796">
													<li class="dropdown-item">
														<button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modal-f-p">
															Floor Plan
														</button>
													</li>
													<li class="dropdown-item">
														<button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modal-t-sum">
															Team Summary
														</button>
													</li>
													<li class="dropdown-item">
														<button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modal-t-edit">
															Team Edit
														</button>	
													</li>
												</ul>
											<button type="button" class="btn btn-primary btn-sm" onclick="zoomInFloor()"  style="margin-left: 5px;"><i class="fa fa-plus" title="Zoom In"></i></button>
											<button type="button" class="btn btn-primary btn-sm" onclick="zoomOutFloor()"  style="margin-left: 5px;"><i class="fa fa-minus" title="Zoom Out"></i></button>
											<button type="button" class="btn btn-primary btn-sm" onclick="centerFloor()"  style="margin-left: 5px;"><i class="fa fa-compress" title="Re-Center"></i></button>		
											<button type="button" class="btn btn-primary btn-sm pull-right" style="margin-left: 5px;"><i class="fa fa-fw fa-print"></i></button>
									     </div>
									</div>
								<div class="box-body">
								  <div  style="height: 100%; width: 100%; text-align: center;">
									<img src="images/floor18.png" Width="100%" alt="" style="max-width:800px;">
								  </div>
								</div>
							    </div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!-- search map end -->
			  

			<!--------------------------
			| Search tab end            |
			 ----------------------------------->
			  
			<!--------------------------
			| Update tab start            |
			  ----------------------------------->  
			  <div class="tab-pane" id="tab_2">
					<section class="content">
						<div class="row">
							<div class="col-sm-12">
								<div class="box no-border">
								<div class="box-header">
								  <h3 class="box-title">Floorplan Summary</h3>
								</div>
								<div class="box-body">
								  <table id="updateTable" class="table table-bordered table-striped">
									<thead>
									<tr>
									  <th>Team</th>
									  <th>Team Description</th>
									  <th>Building</th>
									  <th>Floor</th>
									  <th>Highlight Color</th>
									  <th>Room Count</th>
									</tr>
									</thead>
									<tbody>
										<tr  role="row" class="odd shown">	
								  <td>Accounting</td>
								  <td>Accounting Team</td>
								  <td>BOSMED</td>
								  <td>03</td> 
								  <td>
									<button type="button" class="btn btn-block btn-primary  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
										<a href="" style="color: #ffffff; !Important">Highlight Color</a>
									</button>
								  </td>
								  <td>2</td>
								</tr>
								<tr  role="row" class="odd shown">	
								  <td>Accounting</td>
								  <td>Accounting Team</td>
								  <td>BOSMED1</td>
								  <td>02</td> 
								  <td>
									<button type="button" class="btn btn-block btn-warning  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
										<a href="" style="color: #ffffff; !Important">Highlight Color</a>
									</button>
								  </td>
								  <td>4</td>
								</tr>
								<tr  role="row" class="odd shown">	
								  <td>Accounting</td>
								  <td>Accounting Team</td>
								  <td>BOSMED2</td>
								  <td>01</td> 
								  <td>
									<button type="button" class="btn btn-block btn-danger  btn-xs" style="margin: 10px 10px 10px 10px; width: 90%;">
										<a href="" style="color: #ffffff; !Important">Highlight Color</a>
									</button>
								  </td>
								  <td>25</td>
								</tr>
									</tbody>
									<tfoot>
										<tr>
										  <th>Team</th>
										  <th>Team Description</th>
										  <th>Building</th>
										  <th>Floor</th>
										  <th>Highlight Color</th>
										  <th>Room Count</th>
										</tr>
									</tfoot>
								  </table>
								</div>
								<!-- /.box-body -->
							  </div>
							</div>
						</div>
					</section>
					<!-- /.update floorplan summary content end-->
					<!-- update map start-->
					<section class="content">
						<div class="row">
							<div class="col-xs-12">
							  <div class="box">
								<div class="box-header" style="background: #E3FDE3; !Important">
								  <h3 class="box-title" >Map for: Accounting TEAM</h3>
									  <div class="pull-right box-tools">
										<!-- switch and styles from http://demo.rsc2lc.com/spaceview_v3/V3/locator/team.php?cmd=2 -->
										<div class="form-group">
											<div class="btn-group">
												
													<div class="dropdown pull-left" style="margin-right:5px;">	
														<button type="button" class="btn btn-default btn-xs dropdown-toggle"  data-toggle="dropdown" 
															aria-haspopup="true" aria-expanded="true"  >Active Team: <span class="caret"></span>
														</button>
														<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu874796">
															<li class="dropdown-item">
																<button type="button" class="btn btn-primary" >
																Select Team
																</button>
															</li>
															<li class="dropdown-item">
																<button type="button" class="btn btn-danger" >
																Remove Team
																</button>
															</li>
															<li  class="dropdown-item">
																<button type="button" class="btn btn-default" >
																Team 1
																</button>
															</li>
															<li  class="dropdown-item">
																<button type="button" class="btn btn-default" >
																Team 2
																</button>
															</li>
															<li  class="dropdown-item">
																<button type="button" class="btn btn-default" >
																Team 3
																</button>
															</li>
														</ul>
													</div>
												
												<p class="pull-left" style="margin-right: 5px;">Select Multiple Rooms? </p>
												<!--<p>Select&nbsp;Multiple&nbsp;Rooms?</p>-->
												<div class="switch pull-left">
													<input type="checkbox" class="custom-control-input" id="customSwitches" style="margin-left: 5px;">	
														<label class="switch">
															<input type="checkbox" onclick="javascript:parent.detailFrame.setClickMode();">
															<span class="slider round"></span>  
														</label>	
													</div>
												<button type="button" class="btn btn-primary btn-sm" onclick="zoomInFloor()" data-toggle="dropdown" style="margin-left: 5px;"><i class="fa fa-plus" title="Zoom In"></i></button>
												<button type="button" class="btn btn-primary btn-sm" onclick="zoomOutFloor()" data-toggle="dropdown" style="margin-left: 5px;"><i class="fa fa-minus" title="Zoom Out"></i></button>
												<button type="button" class="btn btn-primary btn-sm" onclick="centerFloor()" data-toggle="dropdown" style="margin-left: 5px;"><i class="fa fa-compress" title="Re-Center"></i></button>		
												<button type="button" class="btn btn-primary btn-sm pull-right" style="margin-left: 5px;"><i class="fa fa-fw fa-print"></i></button>
											</div>
										</div>
									  </div>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
								  <div  style="height: 100%; width: 100%;">
									<img src="images/floor18.png" Width="100%" alt="">
								  </div>
								</div>
							  </div>
							</div>
							<!-- /.update map end-->
						</div>
					</section>
				</div>
			<!--------------------------
			| Update tab end            |
			----------------------------------->

			  
			<!--------------------------
			| Scenario tab start        |
			----------------------------------->  
			    <div class="tab-pane" id="tab_3">
					<!-- Scenario content -->
						<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-scenario">
					Create New Scenario
						</button>
					<section class="content">
						<div class="row">
							<div class="col-sm-12">
								<div class="box no-border">
								<!-- /.box-header -->
								<div class="box-header">
								  <h3 class="box-title">List of Scenarios</h3>
								</div>
								<div class="box-body">
								  <table id="scenarioTable" class="table table-bordered table-striped">
									<thead>
									<tr>
									  <th>Action</th>
									  <th>Scenario Code</th>
									  <th>Scenario Description</th>
									</tr>
									</thead>
									<tbody>
									<tr  role="row" class="odd shown">
											<td data-title="Action">
												<button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-list">
														<span><i class="fa fa-folder-open"></i> Open </span></a>
												</button>
											</td>

										  <td>Allison's Restac</td>
										  <td>Allison's Restack 2nd Floor</td>
										  
										</tr>
										<tr  role="row" class="odd shown">
											<td data-title="Action">
												<button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-list">
														<span><i class="fa fa-folder-open"></i> Open </span></a>
												</button>
											</td>
										  <td>Ambers BP</td>
										  <td>Ambers Block Plan</td>

										</tr>
										<tr  role="row" class="odd shown">	
											<td data-title="Action">
												<button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#modal-list">
														<span><i class="fa fa-folder-open"></i> Open </span></a>
												</button>
											</td>
										  <td>Carly's Test</td>
										  <td>n/a</td>

									</tbody>
									<tfoot>
										<tr>
										  <th>Action</th>
										  <th>Scenario&nbsp;Code</th>
										  <th>Scenario&nbsp;Description</th>
										</tr>
									</tfoot>
								  </table>
								</div>
							  </div>
							</div>
						</div>
					</section>
				</div>
			<!--------------------------
			| Scenario tab end            |
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
	
    //$('#scenarioModalTable').DataTable()
    //$('#searchTable').DataTable({
		
	//$('#searchTable').DataTable()
    $('#scenarioModalTable').DataTable({	
    })
	
	$('#searchTable').DataTable({	
    })
	
});

</script>				 
</body>
</html>