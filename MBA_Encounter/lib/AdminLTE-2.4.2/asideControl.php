<?
// Redirect to the first enabled app
require_once("../../common/common.php");
?>
<!DOCTYPE html>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">

    <!-- Tab panes -->
    <div class="tab-content">
     <!-- Stats tab content -->
      <div class="tab-pane active" id="control-sidebar-stats-tab"></div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->

        <form method="post">
          <h3 class="control-sidebar-heading">Actions & Settings</h3>

          <div class="form-group">
				<button type="submit" name="submit" value="Submit Room Data" class="btn btn-primary"><i class="glyphicon glyphicon-cloud-upload"></i>   Sync</button><br><br>
				<button type="submit" name="submit" value="Submit Room Data" class="btn btn-primary"><i class="glyphicon glyphicon-cloud-download"></i>   Update Lookup Lists</button><br><br>
				<button type="submit" name="submit" value="Submit Room Data" class="btn btn-primary"><i class="glyphicon glyphicon-random"></i>   Change Password</button><br><br>
				<button type="submit" name="submit" value="Submit Room Data" class="btn btn-primary"><i class="glyphicon glyphicon-log-out"></i>   Logout</button><br><br>
				<i class="fa fa-database">     Database:     <?= text( $config["global.dbName"]) ?> </i>   
          </div>
          <!-- /.form-group -->
        </form>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>