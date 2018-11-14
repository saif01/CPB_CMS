<?php
include("include/config.php");
if(isset($_GET['inid']))
{
$id=$_GET['inid'];
$status=0;
$que=mysqli_query($con,"UPDATE `users` SET `status`='0' WHERE `id`='$id' ");

header('location:manage-users.php');

}

?>