<?php require 'DashboardHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<form method="POST" action="resetpasswiord.php">
    		<label class="col-sm-4 mt-3">Employee ID:</label>
    		<input type="text" name="eid" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">Password:</label>
    		<input type="Password" name="eid" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">Confirm Password:</label>
    		<input type="Password" name="eid" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">Name:</label>
    		<input type="test" name="eid" class="col-sm-6 mt-3">
    		<label class="col-sm-4 mt-3">Date Of Birth:</label>
    		<input type="date" name="eid" class="col-sm-6 mt-3">
    		<div class="col-sm-12" align="center"><button type="submit" class="btn btn-primary" style="background-color: #FF4500; border-color: #ff4500;">Sign Up</button></div>
    	</form>
    </div>
</div>
<?php require 'DashboardFooter.php'?>