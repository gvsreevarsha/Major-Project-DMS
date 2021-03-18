<?php
require "connect.php";
$user="5".$_POST["userid"];
$pwd="5".$_POST["password"];
if($pwd=="5" || $user=="5")
	echo '<script type="text/javascript">alert("User or Password Unentered");window.location.href = "DashboardContent.php";</script>;';
$query=mysqli_query($con,"SELECT * FROM `users` WHERE `icno`=".$user." AND `pwd`=".$pwd);
$rowcount=mysqli_num_rows($query);
if($rowcount!=1)
{
	$query=mysqli_query($con,"INSERT INTO `userlog`(`uid`, `sind`, `sint`, `outd`, `outt`) VALUES ($user,CURRENT_DATE(),CURRENT_TIME(),CURRENT_DATE(),CURRENT_TIME())");

	echo '<script type="text/javascript"> 
    alert("Wrong Credentials"); 
    window.location.href = "DashboardContent.php";
    </script>;';
}
else
{
	 session_start();
	$_SESSION["id"]=$user;
	header("Location:AfterLogin/LoginContent.php");
}
exit();
?>