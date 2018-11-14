<?php
session_start();
include('../Admin/include/config.php');
$_SESSION['userlogin']=="";
date_default_timezone_set('Asia/Dhaka');
$ldate=date('d-m-Y h:i:s A', time());
mysqli_query($con, "UPDATE user_info  SET logouttime = '$ldate' WHERE username = '".$_SESSION['userlogin']."' ORDER BY id DESC LIMIT 1");
session_unset();
?>
<script language="javascript">
document.location="../index";
</script>
