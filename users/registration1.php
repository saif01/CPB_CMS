<?php
include('../Admin/include/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$contactno=$_POST['contactno'];
	$Department=$_POST['dept'];
	$Sub_department=$_POST['sub_dept'];
	$Branch=$_POST['branch'];
	$off_id=$_POST['off_id'];
	$status=1;
	$query=mysqli_query($con,"insert into users(fullName,userEmail,password,contactNo,dept,sub_dept,branch,off_id,status) values('$fullname','$email','$password','$contactno','$Department','$Sub_department','$Branch','$off_id','$status')");
	$msg="Registration successfull. Now You can login !";
?>
	<script> alert('Again Register !!!');
		window.open('../users/registration.php','_self');

		</script>
<?php

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>CMS|CPB|User Registration</title>
    <link rel="icon" type="img/png" href="../img/logo.png"/>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
  </head>

  <body>
	  <div id="login-page">
	  	<div class="container">

	  		<div class="wrapper">
		
			<div class="row">
	  	
		      <form class="form-login" method="post">
		        <h2 class="form-login-heading">User Registration</h2>
		        
		        
		        <div class="login-wrap">
		         <input type="text" class="form-control" placeholder="Full Name" name="fullname" required="required" autofocus>
		            <br>
		            <input type="email" class="form-control" placeholder="User ID" id="email" onBlur="userAvailability()" name="email" required="required">
		             <span id="user-availability-status1" style="font-size:12px;"></span>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" required="required" name="password"><br>
		             <input type="text" class="form-control" maxlength="11" name="contactno" placeholder="Contact no" required="required" autofocus>
		            <br>

		            <input type="text" class="form-control" placeholder="Department" name="dept" required="required" autofocus> <br>

		            <input type="text" class="form-control" placeholder="Sub_department" name="sub_dept" required="required" autofocus> <br>

		            <input type="text" class="form-control" placeholder="Branch" name="branch" required="required" autofocus> <br>

		            <input type="text" class="form-control" placeholder="OfficeID" name="off_id" required="required" autofocus> <br>

		            
		            <button class="btn btn-theme btn-block"  type="submit" name="submit" id="submit"><i class="fa fa-user"></i> Register</button>
		            <hr>
		            
		            <div class="registration">
		                
		                
		                    

		                <a class="brand" href="http://localhost/cms/">
			  	             <font size= "5" color= "green">	Home  </font>
			  	        </a>
		            </div>
		        </div>	
		      </form>	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
