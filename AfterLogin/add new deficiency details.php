<?php require 'LoginHeader.php'?>
<style>
.button {
  background-color: #4CAF50;
  border: white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<div class="card container-fluid">
  <div style="background-color: white;" class="container row">
      <form style=" border: 2px dotted red;" class="container row m-2">
        <div class="container row"><br/></div>
        <div class="container row">
          <div class="col-lg-9 col-sm-12 row">
            <div class="col-sm-8 pl-2">MTA, AOH, PM, or CM Checks Deficiency ?</div>
            <div class="col-sm-4">
              <input type="radio" name="boolean" value="Yes" id="check1">
              <label for="check1" style="font-size: 18px;">Yes</label>&emsp;
              <input type="radio" name="boolean" value="No" id="check2">
              <label for="check2"style="font-size: 18px;">No</label>&emsp;
            </div>
          </div>
          <select id="selnat" name="Select Nature of Work" class="col-lg-3 col-sm-12 row">
            <option value="0">Select Nature of Work</option>
            <option value="1">SG1AOH20</option>
            <option value="2">SG2AOH20</option>
            <option value="3">SG3AOH20</option>
          </select>
        </div>
        <div class="container row"><br/></div>
        <div class="container row">
          <div class="col-lg-4 col-sm-12 row">MAINTENANCE AGENCY:</div>
          <div class="col-lg-4 col-sm-12 row">LOCATION/SYSTEM:</div>
          <div class="col-lg-4 col-sm-12 row">EQUIPMENT NAME:</div>
        </div>
        <div class="container row">
          <div class="col-lg-4 col-sm-12 row">
            <select id="selma" name="Select Maintenance Agency">
              <option value="0">Select Maintenance Agency</option>
              <option value="1">MECHANICAL</option>
              <option value="2">ELECTRICAL</option>
            </select>
          </div>
          <div class="col-lg-4 col-sm-12 row">
            <select id="selma" name="Select Maintenance Agency">
              <option value="0">Select Location/System</option>
              <option value="1">220KV & 33KV</option>
              <option value="2">24V & 220V DC</option>
            </select>
          </div><div class="col-lg-4 col-sm-12 row">
            <select id="selma" name="Select Maintenance Agency">
              <option value="0">Select Equipment Name</option>
              <option value="1">220KV LINES</option>
              <option value="2">220KV SWITCH YARD</option>
            </select>
          </div>
        </div>
        <div class="container row"><br/></div>
        <div class="container row">
          <div class="col-lg-12 col-sm-12 row">DESCRIPTION OF DEFICIENCY:(SELF-CONTAINED OF TOTAL DEFICIENCY AND NO JOB PLANNING DETAILS)</div>
          <div class="col-sm-12 pl-3 row">
          <textarea id="defdetails" name="entdef" placeholder="Enter Total Deficiency details except job planning (Do Not Enter like 'SWP may be Issued')" rows="4" class="col-sm-12"></textarea>
          </div>
        </div>
        <div class="container row"><br/></div>
        <div class="container row">
          <div class="col-lg-12 col-sm-12 row">MAINTENANCE JOB PLANNING DETAILS & REMARKS:(OPTIONAL)</div>
          <div class="col-sm-12 pl-3 row">
          <textarea id="maindetails" name="entmain" placeholder="Enter Maintenance Job planning details & Remarks" rows="3" class="col-sm-12"></textarea>
          </div>
        </div>
        <div class="container row"><br/></div>
        <div class="container row"><button class="button"><i class="fa fa-save"></i>&emsp;SAVE DEFICIENCY DETAILS </button></div>
        <div class="container row"><br/></div>
      </form>
    </div>
  </div>
  <div class="container-fluid mt-3 row">    
  </div>
</div>
<?php require 'LoginFooter.php'?>