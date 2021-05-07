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
					<span class="col-sm-2" style="background-color: orange;">
						<?php
						$sql = "SELECT rid FROM records WHERE ( status = 'SWP PART I PREPARED' OR status = 'SWP REISSUED' ) AND class <> 'CLASS II SWP'";
            			$result = mysqli_query($con, $sql);
						$count1 = mysqli_num_rows($result);
						$sql = "SELECT rid FROM records WHERE status = 'SAFETY CLEARED' AND class = 'CS ENTRY CLASS I'";
            			$result2 = mysqli_query($con, $sql);
						$count3 = mysqli_num_rows($result2);
						$count = $count1 + $count3; 
						echo $count;?></span>
					<span class="col-sm-10">SAFETY CLEARANCE REQUIRED</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php
						$sql = "SELECT rid FROM records WHERE agency = 'Inst' AND (status = 'SWP ISSUED' OR status = 'SWP REISSUED' OR status = 'SWP RENEWED')";
            			$result = mysqli_query($con, $sql);
						$count = mysqli_num_rows($result);
						echo $count;?></span>
					<span class="col-sm-10">INSTRUMENTATION JOB STATUS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT rid FROM records";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">ISSUED WORK PERMITS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT rid FROM records WHERE (agency = 'Civil' OR agency = 'Prodtn') AND (status = 'SWP ISSUED' OR status = 'SWP REISSUED' OR status = 'SWP RENEWED')";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">CIVIL AND PRODUCTION JOB STATUS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT rid FROM records WHERE status = 'REQUESTED RENEWAL'";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">REQUESTED RENEWAL PERMITS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT rid FROM records WHERE ( class = 'CS ENTRY CLASS I' OR class = 'CLASS I SWP') AND (status = 'SWP ISSUED' OR status = 'SWP RENEWED' OR status = 'SWP REISSUED')";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">SAFETY SECTION REPORT</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT rid FROM records WHERE status = 'ISOLATIONS CHECKED'";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">ISOLATIONS CHECKED PERMITS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT rid  FROM records WHERE (status = 'OPPORTUNITY SHUTDOWN' OR status = 'UNIT SHUTDOWN' OR status = 'STATION SHUTDOWN')";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">SHUT DOWN JOB DETAILS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT rid FROM records";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">RENEWED WORK PERMITS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT rid  FROM records WHERE (status = 'MATERIAL CONSTRAINT' OR status ='MANPOWER CONSTRAINT')";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">MAINTENANCE CONSTRAINTS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT * FROM records WHERE status LIKE '%SURRENDERED%' OR status = 'TRIAL RUN or CHECKING'";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">SURRENDERED JOB DETAILS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT rid FROM records WHERE status = 'DR SUSPENDED' OR status ='SWP SUSPENDED'";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">SUSPENDED JOB DETAILS</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT * FROM records WHERE status LIKE '%CLEARED%'";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">CLEARED DEFICIENCIES</span>
				</div>
			</button>
		</div>
		<div class="col-lg-6 col-md-12 p-2">
			<button class="container-fluid row btn btn-success">
				<div class="row col-sm-12">
					<span class="col-sm-2" style="background-color: orange;">
						<?php $sql = "SELECT * FROM records WHERE (status = 'DR' OR status = 'DR REISSUED' OR status = 'SWP ISSUED' OR status = 'SWP REISSUED' OR status = 'SWP RENEWED')";
                		$query = mysqli_query($con, $sql);
 	            		$count = mysqli_num_rows($query);
 	            		echo $count;?>
					</span>
					<span class="col-sm-10">STAGNATED DEFICIENCIES</span>
				</div>
			</button>
		</div>
	</div>
</div>
<?php require 'LoginFooter.php'?>