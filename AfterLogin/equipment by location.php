<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	
</div>
<div class="container-fluid mt-3">
	<div class="row">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<head>
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

table, th,td {
  border: 1px solid black;  
 }

table.menu {
     margin-right:0px;
     margin-left:700px;
}




</style>
</head>

<body>
        <label>LOCATION/SYSTEM:</label>&emsp;
          <select id="selloc" name="Select Location/System">
               <option value="1">Select Location/System</option>
                <option value="2">...</option>
           </select>&emsp;
		      
          <button class="button"><i class="fa fa-plus"></i>&ensp;ADD NEW EQUIPMENT</button>&emsp;&emsp;

          <label>Showing 1 to 37 of 37 entries</label>&emsp;
           <input type="text" name="mjp" placeholder="Send to Excel" size="20"/>&emsp;&emsp;

<br>
<br>
<br>
             

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