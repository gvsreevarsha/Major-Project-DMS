<?php 
require 'DashboardHeader.php';
$query=mysqli_query($con,"SELECT * FROM `records`");
$noofdef=mysqli_num_rows($query);
$query=mysqli_query($con,"SELECT * FROM `records` where `status`='UNIT SHUTDOWN'");
$unitshutdown=mysqli_num_rows($query);
$query=mysqli_query($con,"SELECT * FROM `records` where `status`='OPPORTUNITY SHUTDOWN'");
$oppshutdown=mysqli_num_rows($query);
$query=mysqli_query($con,"SELECT * FROM `records` where `status`='STATION SHUTDOWN'");
$statshutdown=mysqli_num_rows($query);
?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<div id="chartContainer" style="width: 100%; height: 300px"></div>
    </div>
</div>
<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-lg-6 col-md-12 p-2">
			<div class="card bg-success">
				<div class="row p-3">
					<div class="col-sm-2 pt-1" align="center"><i class="fa fa-th fa-3x"></i></div>
					<div class="col-sm-10"><div class="row"><h5 class="col-sm-12">TOTAL DEFICIENCY ENTRIES</h5><br><h6 class="col-sm-12"><?php echo $noofdef;?></h6></div></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<div class="card bg-primary">
				<div class="row p-3">
					<div class="col-sm-2 pt-1" align="center"><i class="fa fa-clock-o fa-3x"></i></div>
					<div class="col-sm-10"><div class="row"><h5 class="col-sm-12">OPPURTUNITY SHUTDOWN JOBS</h5><br><h6 class="col-sm-12"><?php echo $oppshutdown;?></h6></div></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<div class="card bg-warning">
				<div class="row p-3">
					<div class="col-sm-2 pt-1" align="center"><i class="fa fa-calendar-check-o fa-3x"></i></div>
					<div class="col-sm-10"><div class="row"><h5 class="col-sm-12">UNIT SHUTDOWN JOBS</h5><br><h6 class="col-sm-12"><?php echo $unitshutdown;?></h6></div></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<div class="card bg-danger">
				<div class="row p-3">
					<div class="col-sm-2 pt-1" align="center"><i class="fa fa-plus-square fa-3x"></i></div>
					<div class="col-sm-10"><div class="row"><h5 class="col-sm-12">STATION SHUTDOWN JOBS</h5><br><h6 class="col-sm-12"><?php echo $statshutdown;?></h6></div></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require 'DashboardFooter.php'?>