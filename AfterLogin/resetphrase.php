<?php
session_start();
require "../connect.php";
$currpwd=$_POST["pwd"];
$phrase=$_POST["phrase"];
echo $currpwd;
echo $phrase;
$query=mysqli_query($con,"SELECT * FROM `users` WHERE `icno`=".$_SESSION["id"]." AND `pwd`='".$currpwd."'");
$row = mysqli_num_rows($query);
if($row==0)
{
	echo '<script type="text/javascript"> 
    alert("Current Password Incorrect"); 
    window.location.href = "change my password.php";
    </script>;';
}
$query2="UPDATE `users` SET `resetph`='".$phrase."' WHERE `icno`=".$_SESSION["id"];
$result2=mysqli_query($con,$query2);
if($query2)
    echo '<script type="text/javascript"> 
    alert("Reset Phrase Updated Successfully"); 
    window.location.href = "LoginContent.php";
    </script>;';
else
    echo '<script type="text/javascript"> 
    alert("Reset Phrase Couldnot Be Updated"); 
    window.location.href = "change my password.php";
    </script>;';
?>