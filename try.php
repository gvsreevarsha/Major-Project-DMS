<?php
session_start();
require 'connect.php';
$query=mysqli_query($con,"SELECT `dname` FROM `users` WHERE `icno`=".$_SESSION["id"]);
$result=mysqli_fetch_row($query);
echo $result[0];
?>