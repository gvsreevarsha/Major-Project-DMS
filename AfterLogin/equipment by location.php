<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
  <div style="background-color: white;" class="row p-2">
    <div class="col-sm-12">&nbsp;</div>
    <div class="col-lg-7 col-sm-12">
      <div class="row">
        <div class="col-sm-7 row">
          <div class="col-sm-6 pt-2">LOCATION/SYSTEM</div>
          <select id="selloc" name="Select Location/System" class="col-sm-6 p-0">
            <option value="1">Select Location/System</option>
            <option value="2">...</option>
          </select> 
        </div>
        <div class="col-sm-5"><button class="btn btn-primary" style="background-color: #4CAF50; border: white; color: white;"><i class="fa fa-plus"></i>&ensp;ADD NEW EQUIPMENT</button></div>
      </div>
    </div>
    <div class="col-lg-5 col-sm-12 row">
      <div class="container-fluid row">
        <div class="col-sm-8 pt-1">Showing 1 to 37 of 37 entries</div>
        <button class="btn btn-secondary" name="mjp" class="col-sm-4">Send to Excel</button>
      </div>
    </div>
    <div class="col-lg-7 col-sm-12">
      <div class="row">&nbsp;</div>
      <div class="row">
        <div class="col-sm-8 pt-1">Showing 1 to 33 of 33 entries</div>
        <div class="col-sm-4"><button class="btn btn-secondary" name="mjp">Send to Excel</button></div>
      </div>
      <div class="row col-sm-12">Hello</div> 
      <div class="row col-sm-12">Hi</div> 
      <table class="row col-sm-12 table table-responsive-sm pt-1" width="100%">
        <thead class="thead-dark">
          
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>220 KV LINES</td>
          </tr>
          <tr>
            <td>2</td>
            <td>220KV SWITCH YARD</td>
          </tr>
          <tr>
            <td>3</td>
            <td>BUS SECTION 1</td>
          </tr>
          <tr>
            <td>4</td>
            <td>BUS SECTION 2</td>
          </tr>
        </tbody>
      </table>
    </div>
    <table class="col-lg-5 col-sm-12 row table table-responsive pt-1">
      <thead class="thead-dark">
        <tr>
          <th>Sl No</th>
          <th>Location/System Name</th>
          <th>No of Equipments</th> 
        </tr>
      </thead>
      <tr>
        <td>1</td>
        <td>220KV & 33KV</td>
        <td>33</td>
      </tr>
      <tr>
        <td>2</td>
        <td>24V & 220V DC</td>
        <td>12</td>
      </tr>
      <tr>
        <td>3</td>
        <td>6.6KV & 415V</td>
        <td>35</td>
      </tr>
      <tr>
        <td>4</td>
        <td>AHP COMMON</td>
        <td>30</td>
      </tr>
      <tr>
        <td>5</td>
        <td>AHP SG #1</td>
        <td>55</td>
      </tr>
      <tr>
        <td>6</td>
        <td>AHP SG #2</td>
        <td>56</td>
      </tr>
    </table>    
  </div>
</div>
<div class="container-fluid mt-3">
  <div class="row">
    
  </div>
</div>
<?php require 'LoginFooter.php'?>





<?php require 'LoginHeader.php'?>
<head>
<!--<style>
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

table, th,td {
  border: 1px solid black;  
 }

table.menu {
     margin-right:0px;
     margin-left:700px;
}
</style>-->
</head>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	
</div>
<div class="container-fluid mt-3">
	<div class="row">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">


<body>
        <label>LOCATION/SYSTEM:</label>&emsp;
          <select id="selloc" name="Select Location/System">
               <option value="1">Select Location/System</option>
                <option value="2">...</option>
           </select>&emsp;
		      
          <button class="button"><i class="fa fa-plus"></i>&ensp;ADD NEW EQUIPMENT</button>&emsp;&emsp;

          <label>Showing 1 to 37 of 37 entries</label>&emsp;
           <input type="text" name="mjp" placeholder="Send to Excel" size="20"/>&emsp;&emsp;
<table class="menu">
 
  <tr>
    <th><select id="selloc" name="Sl No">
        <option value="1">Sl No</option>
        </select>
         
     </th>

      <th><select id="selloc" name="Location/System Name">
          <option value="1">Location/System Name</option>
          </select>
         
      </th>
    
	<th><select id="selloc" name="No of Equipments">
            <option value="1">No of Equipments</option>
            </select>
         
      </th>  

  <tr>
    <td>1</td>
    <td>220KV & 33KV</td>
    <td>33</td>
  </tr>

  <tr>
    <td>2</td>
    <td>24V & 220V DC</td>
    <td>12</td>
  </tr>

  <tr>
    <td>3</td>
    <td>6.6KV & 415V</td>
    <td>35</td>
  </tr>

  <tr>
    <td>4</td>
    <td>AHP COMMON</td>
    <td>30</td>
  </tr>

  <tr>
    <td>5</td>
    <td>AHP SG #1</td>
    <td>55</td>
  </tr>

  <tr>
    <td>6</td>
    <td>AHP SG #2</td>
    <td>56</td>
  </tr>
</table>
</body>
	</div>
</div>
<?php require 'LoginFooter.php'?>