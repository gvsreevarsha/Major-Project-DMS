<?php
session_start();
require "../connect.php";
$query=mysqli_query($con,"SELECT `pwd` FROM `users` WHERE `icno`=".$_POST["id"]);
$res=mysqli_fetch_array($query);
echo $res[0];
echo $_POST["currpwd"];
?>