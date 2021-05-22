<?php
if(!isset($_SERVER['HTTP_REFERER'])){ header('location:dms.php'); exit; };
error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set("Asia/kolkata");
session_start();
 $datefrom = $_POST["date1"];
 $dateto = $_POST["date2"];
 $datefrom = date('Y-m-d', strtotime($datefrom));
 $datefrom = date('Y-m-d', strtotime($datefrom .' -1 day'));
 $dateto = date('Y-m-d', strtotime($dateto));
 $datef = date_create($datefrom);
 $datet = date_create($dateto);
 $dur1 = date_diff($datet, $datef);
 $dur = $dur1->format("%a");
 if ($dur == 1) { $datefromp = $datetom = date ('Y-m-d', strtotime("1979-08-21"));
 } elseif ($dur >= 2) {  $datefromp = date('Y-m-d', strtotime($datefrom .' +1 day'));
          $datetom = date('Y-m-d', strtotime($dateto .' -1 day')); }
 $defitime = date('H:i:s', strtotime('08:30:00'));
 $d = date('d', strtotime($dateto));
header ("Content-type: application/vnd.ms-word");
$filename = "defi_$d.doc";
header ("Content-Disposition: attachement; Filename= ".$filename);
?>

<!DOCTYPE html>
<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'>
<head><meta charset="utf-8">
<title>Deficiency Management System (DMS)</title>
<xml>   <w:worddocument xmlns:w="#unknown">
            <w:view>Print</w:view>
            <w:zoom>90</w:zoom>
            <w:donotoptimizeforbrowser />
        </w:worddocument>
</xml>
 <style type="text/css" media="print">
@page Section1{
            size: 21cm 29.7cm;
            margin: 0.5cm 0.7cm 0.5cm 0.6cm;
            mso-page-orientation: portrait;
			mso-header-margin:.01in;
            mso-footer-margin:.01in; mso-paper-source:0;
        }
        div.Section1 { page:Section1;}
</style>
<style>
#view {
	width : 100%;
	float: center;
	border: 2px solid black;
	border-collapse: collapse;
}

#view th {
	color:black;
	border: 1px solid #c6c6c6;
}

#view tr {
	color:black;
	border: 1px solid #c6c6c6;
}

#view td {
	border: 1px solid #c6c6c6;
	padding: 1px 3px;
	
}

</style>
</head>
<body lang=EN-US style='tab-interval:.5in'>
<div class="Section1">
			  <h6 style="font-size:12pt; text-align:center; margin-bottom: 1px"> भारी पानी संयंत्र ( मणुगूरु )  &nbsp;&nbsp;HEAVY WATER PLANT (MANUGURU) </h6>
				<h6 style="font-size:10pt; text-align:center; margin-top: 5px; margin-bottom: 5px"> कैप्टिव पावर प्लांट,   उत्पादन ( यू ) &nbsp;&nbsp;CAPTIVE POWER PLANT, &nbsp; PRODUCTION (U) </h6>
				<?php if ($dur > 1) { ?>
                 <h6 style="font-size:12pt; text-align:center; margin-top: 0px; margin-bottom: 10px">दैनिक कमी विवरण  &nbsp; <?php echo date('d-m-Y', strtotime($datefrom . ' +1 day')); ?> &nbsp; से &nbsp; <?php echo date('d-m-Y', strtotime($dateto)); ?>&nbsp; तक <br>&nbsp;DAILY DEFICIENCY REPORT FROM &nbsp; <?php echo date('d-m-Y', strtotime($datefrom . ' +1 day')); ?> &nbsp; TO &nbsp; <?php echo date('d-m-Y', strtotime($dateto)); ?> </h6>
					  <?php } else { ?>
				<h6 style="font-size:10pt; text-align:center; margin-top: 0px; margin-bottom: 10px"> दैनिक कमी विवरण  &nbsp; <?php echo date('d-m-Y', strtotime($dateto)); ?> &nbsp;&nbsp;DAILY DEFICIENCY REPORT OF &nbsp; <?php echo date('d-m-Y', strtotime($dateto)); ?> </h6> <?php } ?>
<div class="box-body">
<table id="view" width="100%" class="table table-bordered">
                <thead style="background-color:#fafafa; font-size:10pt">
<?php  require_once 'connect.php'; $slno = 1;
 $sql = "SELECT disid, status, insdate, instime, agency, description, location, equipment, swpdate  FROM records WHERE status <> 'DR CLEARED' AND status <> 'SWP CLEARED' AND ((insdate = '$datefrom' AND instime > '$defitime') OR (insdate BETWEEN '$datefromp' AND '$datetom') OR (insdate = '$dateto' AND instime <= '$defitime')) ORDER by agency DESC, rid ASC";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){ ?>				
				 <tr>
				  <th style="border-bottom:1px solid black; font-size:8pt">SN</th>
                  <th style="border-bottom:1px solid black; font-size:8pt">DR&nbsp;No</th>
                  <th style="border-bottom:1px solid black; font-size:6pt">AGENCY</th>
				  <th style="border-bottom:1px solid black; font-size:8pt">EQUIPMENT</th>
				  <th style="border-bottom:1px solid black">DEFICIENCY</th>
                  <th style="border-bottom:1px solid black">&nbsp;DR&nbsp;&nbsp;DATE&nbsp;</th>
                  <th style="border-bottom:1px solid black">STATUS</th>
                </tr>
                </thead>
                <tbody style='font-family:Segoe UI, Calibri Light, Arial, sans-serif; font-size:9pt'>
 <?php	while($row = mysqli_fetch_array($result)){
            echo "<tr>";
			    echo "<td style=\"page-break-inside:avoid; text-align:center;\">" . $slno . "</td>";
				echo "<td style=\"page-break-inside:avoid; text-align:center\">" . $row['disid'] . "</td>";
				echo "<td style=\"page-break-inside:avoid; text-align:center\">" . $row['agency'] . "</td>";
                if ($row['equipment'] == "MISCELLANEOUS"){ echo "<td style=\"page-break-inside:avoid; font-size:8pt; color:black\">". $row['location'] ."</td>"; 
				  } else { echo "<td style=\"page-break-inside:avoid; font-size:8pt; color:black\">" . $row['location'] . "<br>" . $row['equipment'] . "</td>"; }
				$row['description'] = strtoupper($row['description']);
				echo "<td style=\"page-break-inside:avoid; color:black\">" . $row['description'] . "</td>";
				$row['insdate'] = date('d-m-Y', strtotime($row['insdate']));
                echo "<td style=\"page-break-inside:avoid; text-align:center;\">" . $row['insdate'] . "<br>" . $row['instime'] . "</td>";
				$row['swpdate'] = date('d-m-Y', strtotime($row['swpdate']));
				if ($row['swpdate'] == "01-01-1970"){ $row['swpdate'] = ""; }
				echo "<td style=\"page-break-inside:avoid; text-align:center\">" . $row['status'] . "<br>" . $row['swpdate'] . "</td>";
			echo "</tr>";
			$slno = $slno + 1;
        } mysqli_free_result($result); ?> 
	          </tbody>   
<?php	} else{ echo "<br /><p align='center'> <span style='color:blue; font-size:1.4rem'>NO DRs INITIATED IN REPORT PERIOD.</span> </p><br />"; }
}  ?>  
</table>
<?php $sql = "SELECT rid FROM records WHERE status <> 'DR CLEARED' AND status <> 'SWP CLEARED' AND ((insdate = '$datefrom' AND instime > '$defitime') OR (insdate BETWEEN '$datefromp' AND '$datetom') OR (insdate = '$dateto' AND instime <= '$defitime')) ORDER by rid DESC LIMIT 1";
      $result = mysqli_query($con, $sql);
	  if(mysqli_num_rows($result) > 0){
	  $row = mysqli_fetch_array($result);
      $lastid = $row['rid'];	} else {$lastid = "";} 
      $sql = "SELECT rid FROM records WHERE status <> 'DR CLEARED' AND status <> 'SWP CLEARED' AND ((insdate = '$datefrom' AND instime > '$defitime') OR (insdate BETWEEN '$datefromp' AND '$datetom') OR (insdate = '$dateto' AND instime <= '$defitime')) ORDER by rid ASC LIMIT 1";
      $result = mysqli_query($con, $sql);
	  if(mysqli_num_rows($result) > 0){
	  $row = mysqli_fetch_array($result);
      $fstid = $row['rid'];	} else {$fstid = "";}	  ?>
<h6 style="font-family:Segoe UI, Calibri Light, Arial, sans-serif; font-size:7pt; text-align:left; margin-top: 2px; margin-bottom: 0px">&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo "$lastid"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deficiency Report @ <?php echo date('d-m-Y,  H:i:s'); ?></h6> 
<br clear=all style='mso-special-character:line-break;page-break-after:always'>
	<?php echo "<p align='center'> <span style='font-size:1.2rem; font-variant:small-caps'> Isolated Equipment as on " . date('d-m-Y') . " </span> </p>"; 	  
              $sql = "SELECT disid, cldate, cltime, agency, description, equipment, location, status FROM records WHERE isolated = 'yes' AND status <> 'DR CLEARED' AND status <> 'SWP CLEARED' AND status <> 'DR CANCELLED' AND status <> 'ISOLATION OTO PREPARATION' AND cldate > DATE_SUB(CURDATE(), INTERVAL 366 DAY) ORDER by agency DESC, location ASC, equipment ASC";
      $result = mysqli_query($con, $sql);
      if(mysqli_num_rows($result) > 0 ) { $slno = 1; ?>
         <table id="view" width="100%" class="table table-bordered">
                <thead>
               <tr>
			      <th style='font-size:9pt'>SN</th>
                  <th style='font-size:8pt'>Agency</th>
				  <th style='font-size:10pt'>Location & Equipment</th>
				  <th style='font-size:10pt'>Deficiency</th>
				  <th style='font-size:9pt'>DR&nbsp;Number</th>
               </tr>
            </thead>
                <tbody>
       <?php	while($row = mysqli_fetch_assoc($result)){  
            echo "<tr>";
			    echo "<td  style=\"text-align:center; font-size:7pt;\">".$slno."</td>";
				$cldate = $row['cldate'];
				$dtdiff = strtotime(date('Y-m-d')) - strtotime($cldate);
                $dur = round($dtdiff / (86400));
			    if ($dur < 1 ) { $dur = "T"; }
			    if ($dur == 1 ) { $dur = "Y"; }
				if ($row['agency'] == "Mech") { $row['agency'] = 'M ('.$dur.')'; }
				if ($row['agency'] == "Elec") { $row['agency'] = 'E ('.$dur.')'; }
				if ($row['agency'] == "Inst") { $row['agency'] = 'I ('.$dur.')'; }
				if ($row['agency'] == "Civil") { $row['agency'] = 'C ('.$dur.')'; }
				if ($row['agency'] == "Prodtn") { $row['agency'] = 'P ('.$dur.')'; }
				if ($row['agency'] == "Fire") { $row['agency'] = 'F ('.$dur.')'; }
				if ($row['agency'] == "Safety") { $row['agency'] = 'S ('.$dur.')'; }
				if ($row['agency'] == "TSS") { $row['agency'] = 'T ('.$dur.')'; }
				echo "<td style=\"text-align:left; font-size:8pt;\">&nbsp;" . $row['agency'] . "</td>";
				if ( $row['equipment'] == "MISCELLANEOUS" ) { $row['equipment'] = ""; }
				$row['equipment'] = (strlen($row['equipment']) > 25 ) ? substr($row['equipment'],0,25) : $row['equipment'];
				if ($row['status'] == "SWP SURRENDERED" || $row['status'] == "TRIAL RUN or CHECKING") {
				        if ( $row['equipment'] == "" ) { echo "<td style=\"font-size:8pt;\">" . $row['location'] . "**</td>";
				           } else { echo "<td style=\"font-size:8pt;\">" . $row['location'] . ", " . $row['equipment'] . "**</td>"; } 
				   } else {
					   	if ( $row['equipment'] == "" ) { echo "<td style=\"font-size:8pt;\">" . $row['location'] . "</td>";
				           } else { echo "<td style=\"font-size:8pt;\">" . $row['location'] . ", " . $row['equipment'] . "</td>"; }
				   }
				$row['description'] = (strlen($row['description']) > 48 ) ? substr($row['description'],0,48) : $row['description'];
				echo "<td style=\"text-align:left; font-size:8pt;\">" . $row['description'] . "</td>";
				$row['disid'] = (strlen($row['disid']) > 10 ) ? substr($row['disid'],0,10) : $row['disid'];
				echo "<td  style=\"text-align:center; font-size:8pt;\">".$row['disid']."</td>";
            echo "</tr>"; $slno = $slno + 1; } ?>
				</tbody>
				</table> <?php
	} else { echo "<br><br><br><p align='center'><span style='color:magenta; font-variant:small-caps; font-size:2rem'>No Isolated Equipment Sofar&nbsp;</span></p><br><br><br><br><br><br>";  } ?>  		
<p style='text-align:left; font-family:Segoe UI, Calibri Light, Arial, sans-serif; font-size:10px; padding-top:0px; margin-top:5px; margin-left:10px'>**&nbsp;&nbsp;Surrendered / Trial run or Checking Status.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printed @ <?php echo date('d-m-Y H:i:s'); ?>  </p>			
<br clear=all style='mso-special-character:line-break;page-break-after:always'>
 <h3 style="font-size:14pt; text-align:center; margin-bottom: 10px"> IMPORTANT OPERATIONAL CONSTRAINTS </h3> 
<table id="view" width="100%" class="table table-bordered">
   <thead style="background-color:#f5f5f5; font-size:10pt">
<?php  	
 $slno = 1;
 $sql = "SELECT agency, agency2, const, unit  FROM ioc WHERE status = 'active' ORDER by agency DESC, unit ASC, insdate DESC ";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){ ?>				
				<tr>
				  <th style="border-bottom:1px solid black; font-size:7pt">SN</th>
                  <th style="border-bottom:1px solid black; font-size:6pt">AGENCY</th>
				  <th style="border-bottom:1px solid black; font-size:7pt">UNIT</th>
				  <th style="border-bottom:1px solid black">CONSTRAINT</th>
				</tr>
                </thead>
                <tbody style='font-family:Segoe UI, Calibri Light, Arial, sans-serif; font-size:8pt'>
 <?php	while($row = mysqli_fetch_array($result)){
            echo "<tr>";
			    echo "<td style=\"page-break-inside:avoid; text-align:center;\">" . $slno . "</td>";
				echo "<td style=\"page-break-inside:avoid;\">" . $row['agency'] . "<br>" . $row['agency2'] . "</td>";
				if ($row['unit'] == "COMMON") { $row['unit'] = strtolower($row['unit']); $row['unit'] = ucfirst($row['unit']);
                                                echo "<td style=\"page-break-inside:avoid; font-size:7pt;\">" . $row['unit'] . "</td>";
					} else { echo "<td style=\"page-break-inside:avoid;\">" . $row['unit'] . "</td>"; }
				// $row['const'] = str_replace(array('º', '²', '±'), array(' degree ', ' square', '+ or - '), $row['const'] );
				echo "<td style=\"page-break-inside:avoid; color:black\">" . $row['const'] . "</td>";
			echo "</tr>";
			$slno = $slno + 1;
        } mysqli_free_result($result); ?> 
	          </tbody>           
<?php	} else{ echo "<br /><br /><p align='center'> <span style='color:blue; font-size:1.5rem'> NO CONSTRAINTS EXISTING.</span> </p><br /><br />"; }
  } $result = mysqli_query($con, "SELECT insdate  FROM ioc WHERE status = 'active' OR status = 'inactive' ORDER by insdate DESC LIMIT 1");   
     $row = mysqli_fetch_array($result);
	 $lastupdt = date('d-m-Y, H:i:s', strtotime($row['insdate']));
  $query = mysqli_query($con, "SELECT dyname FROM editioc WHERE status = 'active' ORDER by id DESC LIMIT 1");
  $row = mysqli_fetch_assoc($query);
  $dyname = $row['dyname']; ?>  
</table>              
<h6 style="font-family:Segoe UI, Calibri Light, Arial, sans-serif; font-size:7pt; text-align:left; margin-top: 2px; margin-bottom: 0px"> &nbsp;&nbsp;&nbsp;&nbsp;IOC, Last updated at: <?php echo $lastupdt."&nbsp;Hrs." ?></h6>
<h6 style="font-size:12pt; text-align:right; margin-top: 30px; margin-bottom: 2px"> ( <?php echo $dyname; ?> )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h6>
<h6 style="font-family:Segoe UI, Calibri Light, Arial, sans-serif; font-size:9pt; text-align:right; margin-top: 2px; margin-bottom: 1px; margin-right:10px">&nbsp;&nbsp;Dy. Production Manager (U)&nbsp;&nbsp;&nbsp;&nbsp;</h6>
</div>
<?php $_SESSION = array();
      session_destroy(); 
      mysqli_close($con); ?>
</body>
</html>