<?php
include("include/config.php");

/*  anable or disable code for user  */

if(isset($_GET['inid']))
{
$id=$_GET['inid'];
$status=0;
$que=mysqli_query($con,"UPDATE `users` SET `status`='0' WHERE `id`='$id' ");

header('location:manage-users.php');
}

if(isset($_GET['id']))
{
$id=$_GET['id'];

$que=mysqli_query($con,"UPDATE `users` SET `status`='1' WHERE `id`='$id' ");

header('location:manage-users.php');
}

/*  anable or disable code for Admin panel  */

if(isset($_GET['a_inid']))
{
$id=$_GET['a_inid'];
$status=0;
$que=mysqli_query($con,"UPDATE `users` SET `status`='0' WHERE `id`='$id' ");

header('location:Admin_panel.php');
}

if(isset($_GET['a_id']))
{
$id=$_GET['a_id'];

$que=mysqli_query($con,"UPDATE `users` SET `status`='1' WHERE `id`='$id' ");

header('location:Admin_panel.php');
}

?>