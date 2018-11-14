<?php 
require_once("include/config.php");
if(!empty($_POST["nam"])) 
{
	$nam= $_POST["nam"];
	
		$result =mysqli_query($con,"SELECT `username` FROM `Admin_s` WHERE `username` ='$nam'");
		$count=mysqli_num_rows($result);
		if($count>0)
		{
		echo "<span style='color:red'> Name already exists .</span>";
		 echo "<script>$('#submit').prop('disabled',true);</script>";
		} 
		else
		{
			
			echo "<span style='color:green'> Name available for Registration .</span>";
		    echo "<script>$('#submit').prop('disabled',false);</script>";
		}
}


?>
