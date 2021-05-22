<?php require 'LoginHeader.php'?>
<script type="text/javascript">
  function loc2change(val)
  {
    var loc2=val;
    document.cookie = "loc2 = " + loc2;
    console.log(document.cookie);
    location.reload();
  }
</script>
<div class="card container-fluid">
  <div style="background-color: white;" class="container">
      <form method="GET" action="searchedbycriteria.php" class="row p-4">
        <div class="container-fluid row p-1">
          <div class="col-sm-5">DR INITIATED DATE RANGE:</div>
          <div class="col-sm-3"><input type="date" name="date1" max="<?php echo date("Y-m-d");?>"></div>
          <div class="col-sm-1">to</div>
          <div class="col-sm-3"><input type="date" name="date2" max="<?php echo date("Y-m-d");?>"></div>
        </div>
        <div class="container-fluid row p-1">
          <div class="col-sm-5">DEFICIENCY CURRENT STATUS:</div>
          <div class="col-sm-3">
            <select id="Status" name="currstatus">
              <option value="Select deficiency Current Status">Select deficiency Current Status</option>
              <?php
                $query="SELECT DISTINCT(`status`) FROM `records`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option name='status' value='" . $row['status'] ."'>" . $row['status'] ."</option>";
                    }
                    $result->free();
                }
              ?>
            </select>
          </div>
          <div class="col-sm-4">
            <input type="checkbox" id="excludingcc" name="excludingcc" value="1">&nbsp;<label for="excludingcc" style="font-size: 12px;">ALL EXCLUDING CLEARED AND CANCELLED</label><br>
          </div>
        </div>
        <div class="container-fluid row p-1">
          <div class="col-sm-5">MAINTENANCE AGENCY:</div>
          <div class="col-sm-7">
            <select id="agency" name="agency">
              <option value="0">Select Mechanical Agency</option>
              <?php
                $query="SELECT * FROM `agency`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option name='agency' value='" . $row['aname'] ."'>" . $row['aname'] ."</option>";
                    }
                    $result->free();
                }
              ?>
            </select>
          </div>
        </div>
        <div class="container-fluid row p-1">
          <div class="col-sm-5">LOCATION/EQUIPMENT(1):</div>
          <div class="col-sm-3">
            <select id="loceqp" name="loceqp">
              <option value="0">Select Location System(1)</option>
              <?php
                $query="SELECT DISTINCT(`lname`) FROM `location`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option value='" . $row['lname'] ."'>" . $row['lname'] ."</option>";
                    }
                    $result->free();
                }
              ?>
            </select>
          </div>
          <div class="col-sm-1">&nbsp;</div>
          <div class="col-sm-3">
            <select id="seleqp" name="seleqp">
              <option value="0">Select Equipment(1)</option>
              <?php
                $query="SELECT * FROM `equipment`,`location` WHERE `equipment`.`lid`=`location`.`lid`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option value='" . $row['ename'] ."'>" . $row['ename'] ."</option>";
                    }
                    $result->free();
                }
              ?>
            </select>
          </div>
        </div>
        <div class="container-fluid row p-1">
          <div class="col-sm-5">LOCATION/EQUIPMENT(2):</div>
          <div class="col-sm-3">
            <select id="loceqp2" name="loceqp2">
              <option value="0">Select Location System(2)</option>
              <?php
                $query="SELECT DISTINCT(`lname`) FROM `location`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option value='" . $row['lname'] ."'>" . $row['lname'] ."</option>";
                    }
                    $result->free();
                }
              ?>
            </select>
          </div>
          <div class="col-sm-1">&nbsp;</div>
          <div class="col-sm-3">
            <select id="seleqp2" name="seleqp2">
              <option value="0">Select Equipment(2)</option>
              <?php
                $query="SELECT * FROM `equipment`,`location` WHERE `equipment`.`lid`=`location`.`lid`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option value='" . $row['ename'] ."'>" . $row['ename'] ."</option>";
                    }
                    $result->free();
                }
              ?>
            </select>
          </div>
        </div>
        <div class="container-fluid row p-1">
          <div class="col-sm-5">MTA,AOH,PM,or CM checks:</div>
          <div class="col-sm-3">
            <select id="mta" name="mta">
              <option value="0">Select MTA,AOH,PM,Check ID</option>
              <?php
                $query="SELECT DISTINCT(`saohmta`) FROM `aohmta`";
                if ($result = $con->query($query)) 
                {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<option id='loc/eqp' name='location2' value='" . $row['saohmta'] ."'>" . $row['saohmta'] ."</option>";
                    }
                    $result->free();
                }
              ?>
            </select>            
          </div>
          <div class="col-sm-1">&nbsp;</div>
          <div class="col-sm-3">
            <select id="year" name="year"> 
              <option value="0">Select Year</option>
              <option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
              <option value="<?php echo date('Y',strtotime("-1 years"));?>"><?php echo date('Y',strtotime("-1 years"));?></option>
              <option value="<?php echo date('Y',strtotime("-2 years"));?>"><?php echo date('Y',strtotime("-2 years"));?></option>
              <option value="<?php echo date('Y',strtotime("-3 years"));?>"><?php echo date('Y',strtotime("-3 years"));?></option>
            </select>
          </div>
        </div>
        <div class="container-fluid row p-1">
          <div class="col-sm-12" align="center"><input type="submit" class="btn btn-success" name="Search Criteria"></div>
        </div>
      </form>    
  </div>
</div>
<?php require 'LoginFooter.php'?>