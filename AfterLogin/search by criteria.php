<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<style type="text/css">
form {
 margin: 0;
 padding: 1em 0;
text-algn:center;

}
body
{
text-align:center;
}

.srchbtn {  
  background-color: #4CAF50;  
  color: black;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer; 
 margin-left:300px;  
    
} 

</style>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<h5 style="font-family: 'Lucida Console','Courier New', monospace;color:green; text-align: center;">DO NOT SELECT AN OPTION,IF THAT CRITERIA IS NOT APPROPRIATE(LET IT BE DEFAULT)</h5>
<body>
<form action="/action_page.php"> 
<fieldest>
<br>
<br>
<br>

<label ><b>DR INITIATED DATE RANGE:</b></label>
<input type="text" name="Date" placeholder="01-Feb-2021 -15-Feb-2021" size="40"/> 
<label style="color:red">&emsp;<font size="2"><b>15 DAYS SELECTED</b></font></label>
<br>
<br>
<br>

<label><b>DEFICIENCY CURRENT STATUS:</b></label>
<select id="Status" name="Select Deficiency Current Status">
<option value="Select deficiency Current Status">Select deficiency Current Status</option>
<option value="APPROVAL REQURIRED">APPROVAL REQURIRED</option>
<option value="APPROVED BY Dy PM(U)/PM(U)">APPROVED BY Dy PM(U)/PM(U)</option>
</select>&emsp;
<input type="checkbox" id="1" name="1" value="">
<label style="color:blue"><font-size="3"><b>ALL EXCLUDING CLEARED AND CANCELLED</b></font></label>
<br>
<br>
<br>

<label ><b>MAINTENANCE AGENCY:</b></label>
<select id="Maintenance Agency" name="Maintenance Agency">
<option value="0">Select Mechanical Agency</option>
<option value="1">MECHANICAL</option>
<option value="2">ELECTRICAL</option>
</select>
<br>
<br>
<br>

<label><b>LOCATION/EQUIPMENT(1):</b></label>
<select id="loc/eqp" name="loc/eqp">
<option value="0">Select Location System(1)</option>
<option value="1">220KV & 33KV</option>
<option value="2">24V & 220V DC</option>
</select>
&emsp;&emsp;

<select id="sel eqp" name="sel eqp"
<option value="0">Select Equipment(1)</option>
<option value="1">Select Equipment(1)</option>
<option value="2">BFP-1A AC LOP-1</option>
</select>
<br>
<br>
<br>

<label><b>LOCATION/EQUIPMENT(2):</b></label>
<select id="seleqp" name="seleqp">
<option value="0">Select Location/System(2)</option>
<option value="1">220KV & 33KV</option>
<option value="2">24V & 220V DC</option>
</select>
&emsp;&emsp;


<select id="sel eqp" name="sel eqp"
<option value="0">Select Equipment</option>
<option value="1">Select Equipment(2)</option>
<option value="2">BFP-1A AC LOP-1</option>
</select>
<br>
<br>
<br>


<label><b>MTA,AOH,PM,or CM checks:</b></label>
<select id="mta" name="mta">
<option value="0">Select MTA,AOH,PM,Check ID</option>
<option value="1">SG1AOH</option>
<option value="2">SG2AOH</option>
</select>
&emsp;&emsp;

<select id="sel year" name="sel year" 
<option value="1">2021</option>
<option value="2">Select Year</option>
<option value="3">2020</option>
</select>
<br>
<br>


<button class="srchbtn"><i class="fa fa-search"></i>&nbsp;<b>SEARCH DEFICIENCIES</b></button>


</form>
</body>

<p style="color:purple">Note:Maximum span of From and To dates is 6 Months.Always Select 'From date'first.</p>

    </div>
</div>
<div class="container-fluid mt-3">
	<div class="row">
		
	</div>
</div>
<?php require 'LoginFooter.php'?>