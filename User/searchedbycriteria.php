<?php
require "../connect.php";
$date1=$_GET["date1"];
//echo $date1;
$date2=$_GET["date2"];
//echo $date2;
$currstatus=$_GET["currstatus"];
//echo $currstatus;
$agency=$_GET["agency"];
//echo $agency;
$loceqp=$_GET["loceqp"];
//echo $loceqp;
$seleqp=$_GET["seleqp"];
//echo $seleqp;
$loceqp2=$_GET["loceqp2"];
//echo $loceqp2;
$seleqp2=$_GET["seleqp2"];
//echo $seleqp2;
$mta=$_GET["mta"];
//echo $mta;
$year=$_GET["year"];
//echo $year;
if($date1==NULL)
	$sql1="SELECT * FROM `records`";
else
	$sql1="SELECT * FROM `records` WHERE `instime`>'".$date1."'";
if($date1==NULL)
	$sql2="SELECT * FROM `records`";
else
	$sql2="SELECT * FROM `records` WHERE `instime`<'".$date2."'";
if($currstatus=="Select deficiency Current Status")
{
	if(isset($_GET["excludingcc"]))
		$sql3="SELECT * from `records` WHERE `status` NOT IN (SELECT `status` FROM `records` WHERE `status` LIKE '%CLEARED' OR `status` LIKE '%CANCELLED')";
	else
		$sql3="SELECT * FROM `records`";
}
else
	$sql3="SELECT * FROM `records` WHERE `status`='".$currstatus."'";
if($agency=='0')
	$sql4="SELECT * FROM `records`";
else
	$sql4="SELECT * FROM `records` WHERE `agency`='".$agency."'";
if($loceqp=='0' && $loceqp2=='0')
	$sql5="SELECT * FROM `records`";
else if($loceqp!='0' && $loceqp2=='0')
	$sql5="SELECT * FROM `records` WHERE `location`='".$loceqp."' AND `equipment`='".$seleqp."'";
else if($loceqp!='0' && $loceqp2!='0')
	$sql5="SELECT * FROM `records` WHERE (`location`='".$loceqp."' AND `equipment`='".$seleqp."') OR (`location`='".$loceqp2."' AND `equipment`='".$seleqp2."')";
else
	$sql5="SELECT * FROM `records`";
if($mta=='0')
	$sql6="SELECT * FROM `records`";
else
	$sql6="SELECT `records`.* FROM `mta`,`records` WHERE `records`.`rid`=`mta`.`rid` AND `mtaname`='".$mta."'";
if($year=='0')
	$sql7="SELECT * FROM `records`";
else
	$sql7="SELECT `records`.* FROM `records` WHERE SUBSTRING(`insdate`,1,4)='".$year."'";
$sql=$sql1." INTERSECT ".$sql2." INTERSECT ".$sql3." INTERSECT ".$sql4." INTERSECT ".$sql5." INTERSECT ".$sql6." INTERSECT ".$sql7." ORDER BY `insdate`";
$query=mysqli_query($con,$sql);
$no_of_rows=mysqli_num_rows($query);
if($no_of_rows==0)
    header("Location:nosearch.php");
//echo $sql;
//echo $no_of_rows;
?>
<?php require 'LoginHeader.php'?>
<div class="container-fluid" style="font-family: 'Times New Roman'"><h3>Total No Of Records: <?php echo $no_of_rows;?></h3></div>
<div class="card container-fluid">
  <div style="background-color: white;" class="row">
    <table class="table table-responsive-sm">
      <thead class="thead-dark">
        <tr>
          <th>Deficiency ID</th>
          <th>Initiated Date</th>
          <th>Location</th>
          <th>Equipment</th>
          <th>Agency</th>
          <th>Description</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
      	
        <?php
            if ($result = $con->query($sql)) {
              while ($row = $result->fetch_assoc()) {
                $rid = $row["rid"];
                $insdate = $row["insdate"];
                $agency = $row["agency"];
                $location = $row["location"];
                $equipment = $row["equipment"];
                $description = $row["description"];
                $status = $row["status"];
                echo '<tr> 
                        <td>'.$rid.'</td> 
                        <td>'.$insdate.'</td>
                        <td>'.$location.'</td>
                        <td>'.$equipment.'</td>
                        <td>'.$agency.'</td>
                        <td>'.$description.'</td>
                        <td>'.$status.'</td>
                    </tr>';
            }
            $result->free();
          }
        ?>
    </tbody>
  </table>
</div>
</div>
<div class="container-fluid mt-3">
  <div class="row">
  </div>
</div>
<?php require 'LoginFooter.php'?>