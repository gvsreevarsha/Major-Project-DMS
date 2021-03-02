<?php require 'LoginHeader.php'?>
<div class="container-fluid mt-3">
	<div class="row">
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;"><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `status`='APPROVAL REQUIRED'"));?></span>
					<span class="col-sm-10">APPROVAL REQUIRED JOBS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;"><i class="fa fa-smile-o"></i></span>
					<span class="col-sm-10">MY WORK DETAILS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;"><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` where `status` LIKE '%OTO PREPARATION%' OR `status` LIKE '%SWP PREPARATION%'"));?></span>
					<span class="col-sm-10">SWP OR OTO PREPARATION</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;"><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` WHERE `agency`='Mech'"));?></span>
					<span class="col-sm-10">MECHANICAL JOB STATUS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;"><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` WHERE status = 'SWP PART I PREPARED'"));?></span>
					<span class="col-sm-10">PART I PREPARED WORK PERMITS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;"><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` WHERE `agency`='Elec'"));?></span>
					<span class="col-sm-10">ELECTRICAL JOBS STATUS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;"><?php echo mysqli_num_rows(mysqli_query($con,"SELECT * FROM `records` WHERE `agency`='Elec'"));?></span>
					<span class="col-sm-10">SAFETY CLEARANCE REQUIRED</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">0</span>
					<span class="col-sm-10">Civil And Production Job Status</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">0</span>
					<span class="col-sm-10">Safety Section Report</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">0</span>
					<span class="col-sm-10">Safety Clearance Required</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">0</span>
					<span class="col-sm-10">Issued Work Permits</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">0</span>
					<span class="col-sm-10">Shut Down Job Details</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">0</span>
					<span class="col-sm-10">Maintenance Contraints</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">0</span>
					<span class="col-sm-10">Suspended Job Details</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">0</span>
					<span class="col-sm-10">Stagnated Deficiencies</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">0</span>
					<span class="col-sm-10">Cleared Deficiencies</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">0</span>
					<span class="col-sm-10">Surrendered Job Details</span>
				</div>
			</button>
		</div>
	</div>
</div>
<?php require 'LoginFooter.php'?>