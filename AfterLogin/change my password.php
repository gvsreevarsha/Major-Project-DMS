<?php require 'LoginHeader.php'?>
<div class="card container-fluid">
    <div style="background-color: white;" class="row p-2">
    	<form>  
 <div class="container">   
<center><h1>PASSWORDS ARE STRONGLY ENCRYPTED.THEY CANNOT BE READ EVEN IN DATABASE BY ANYBODY.<h1></center>
 <br>
<br>
 
<label> <font size="6">  Current Password   </font></label> 
&nbsp;      
<input type="text" name="Current Password"  placeholder="Enter Present Password"size="20"/> <br> <br>  
<label><font size="6"> New Password</font> </label>  
&emsp;
<input type="text" name="New Password"  placeholder="Enter New Password,6-28 Characters length"size="45"/> <br> <br>  
<label><font size="6"> Confirm New Password </font></label> 
&nbsp;       
<input type="text" name="Confirm New Password" &nbsp placeholder="Re-enter the new password" size="25"/> <br> <br> 

<p style="color:red"><font size="4">ALL FIELDS ARE MANDATORY TO CHANGE THE PASSWORD.</font></p>
<br>
<br>
<input type="button" class="rstbtn"value="Reset"/>   
<input type="button"class="changepwdbtn" value="Change Password"/>  
<p style="color:purple","font-family:verdana"><font size="5"><b>Note:It is recommended to change</b> </font><input type="button"value="Default password Reset phrase"/></p>
 
</form>

    </div>
</div>
<div class="container-fluid mt-3">
	<div class="row">
		
	</div>
</div>
<?php require 'LoginFooter.php'?>