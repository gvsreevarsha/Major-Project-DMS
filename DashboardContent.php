<?php require 'DashboardHeader.php'?>
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
					<div class="col-sm-10"><div class="row"><h5 class="col-sm-12">TOTAL DEFICIENCY ENTRIES</h5><br><h6 class="col-sm-12">XXXX</h6></div></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<div class="card bg-primary">
				<div class="row p-3">
					<div class="col-sm-2 pt-1" align="center"><i class="fa fa-clock-o fa-3x"></i></div>
					<div class="col-sm-10"><div class="row"><h5 class="col-sm-12">TOTAL CLEARED JOBS</h5><br><h6 class="col-sm-12">XXXX</h6></div></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<div class="card bg-warning">
				<div class="row p-3">
					<div class="col-sm-2 pt-1" align="center"><i class="fa fa-calendar-check-o fa-3x"></i></div>
					<div class="col-sm-10"><div class="row"><h5 class="col-sm-12">STAGNATED JOBS</h5><br><h6 class="col-sm-12">XXXX</h6></div></div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<div class="card bg-danger">
				<div class="row p-3">
					<div class="col-sm-2 pt-1" align="center"><i class="fa fa-plus-square fa-3x"></i></div>
					<div class="col-sm-10"><div class="row"><h5 class="col-sm-12">SHUTDOWN JOBS</h5><br><h6 class="col-sm-12">XXXX</h6></div></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require 'DashboardFooter.php'?>