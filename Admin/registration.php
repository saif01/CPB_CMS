<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['mainAdmin'])==0)
  { 
header('location:../login');
}
else{
date_default_timezone_set('Asia/Dhaka');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
 
 

  $fullName=$_POST['fullName'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $contactNo=$_POST['contactNo'];
  $Department=$_POST['dept'];
  $Sub_department=$_POST['sub_dept'];
  $Branch=$_POST['branch'];
  $off_id=$_POST['off_id'];
  $nid=$_POST['nid'];
  $bu_head=$_POST['bu_head'];


  $category="user";
  $section="user";
  $status=1;



  $query=mysqli_query($con,"INSERT INTO `users`(`fullName`, `userEmail`, `password`, `contactNo`, `dept`, `sub_dept`, `branch`, `off_id`, `nid`, `bu_head`, `category`, `section`, `status`) VALUES ('$fullName','$email','$password','$contactNo','$Department','$Sub_department','$Branch','$off_id','$nid','$bu_head','$category','$section','$status')");
// email sending

if(isset($_POST['submit']))
    {
        //$to =$_POST['email'];
       
    $to = $_POST['email']; // this is your Email address
   // $from = "C.P.Bangladesh@gmail.com "; // this is the sender's Email address
  
    //$message = "This is a problem mail and Problem Code:".$cmpn ." ". $category . "  -- Problem in :   " . $subcategory . " -- Complain for :  " .$complain_for . " -- From : " .$state .".";
   $sub= 'C.P.B. Registration Notification';
   $password=$_POST['password'];

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                
                        // Additional headers
                
    $headers[] = 'From: cpbangladesh.com';
    
    $message=" <html><hr>
                                <font size='5' color='green'>Dear User,This Is Your ID And PAssword for  C.P. Bangladesh C.M.S.</font><br><br>
                                <font size='4' color='red'>Your **user ID**:  ".$to." </font><br>
                                <font size='4' color='red'>Your **Password**:  ".$password.".</font><hr><br>
                                
                                <font size='2' color=''> Thank you, Sir.</font><br>
                          </html> ";
   // $headers = "From:" . $from;
   // $headers2 = "From:" . $to;
    mail($to,$sub,$message,implode("\r\n", $headers));

    }

?>
  <script>
    alert('Registration successfull. Now user can login  !');
    window.open('registration.php','_self');

    </script>
<?php

}

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin|New user create</title>
  <link rel="icon" type="img/png" href="../img/logo.png"/>
  <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="css/theme.css" rel="stylesheet">
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
<?php include('include/header.php');?>

  <div class="wrapper">
    <div class="container">
      <div class="row">
<?php include('include/sidebar.php');?>       
      <div class="span9">
          <div class="content">

            <div class="module">
              <div class="module-head">
                <h2>User Registration</h2>
              </div>
              <div class="module-body">

                  

      <form class="form-horizontal row-fluid" name="" method="post" >
                  
<div class="control-group">
    <label class="control-label" for="basicinput"> Name : </label>
    <div class="controls">
        <input type="text" placeholder="Enter category Name"  name="fullName" class="span10 tip" required>
    </div>
</div>


<div class="control-group">
    <label class="control-label" for="basicinput">User ID : </label>
    <div class="controls">
        <input type="text" placeholder="Enter userEmail"  id="email" onBlur="userAvailability()" name="email" class="span10 tip" required>
        <span id="user-availability-status1" style="font-size:12px;"></span>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="basicinput">Password : </label>
    <div class="controls">
        <input type="password" placeholder="Enter User password"  name="password" class="span10 tip" required>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="basicinput">contact No : </label>
    <div class="controls">
        <input type="text" placeholder="Enter Contract Number"  name="contactNo" class="span10 tip" required>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="basicinput">Department Name : </label>
    <div class="controls">
        <input type="text" placeholder="Enter Department Name"  name="dept" class="span10 tip" required>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="basicinput">Sub_Department : </label>
    <div class="controls">
        <input type="text" placeholder="Enter Sub_Department Name"  name="sub_dept" class="span10 tip" required>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="basicinput">Brance Name : </label>
    <div class="controls">
        <input type="text" placeholder="Enter Brance Name Name"  name="branch" class="span10 tip" required>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="basicinput">Office ID : </label>
    <div class="controls">
        <input type="text" placeholder="Enter Office ID Name"  name="off_id" class="span10 tip" required>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="basicinput">NID Nunber : </label>
    <div class="controls">
        <input type="text" placeholder="Enter National Id  Nunber"  name="nid" class="span10 tip" required>
    </div>
</div>
<div class="control-group">
    <label class="control-label" for="basicinput">B.U. Name</label>
    <div class="controls">
        <input type="text" placeholder="Enter Business Unit Head"  name="bu_head" class="span10 tip" required>
    </div>
</div>



  <div class="control-group">
                      <div class="controls">
                        <button type="submit" name="submit" class="btn btn-lg span10 btn-danger"><i class="icon-ok-sign"></i> Create</button>
                      </div>
                    </div>
                  </form>
              </div>
            </div>


  
         

            
            
          </div><!--/.content-->
        </div><!--/.span9-->
      </div>
    </div><!--/.container-->
  </div><!--/.wrapper-->

<?php include('include/footer.php');?>

  <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
  <script src="scripts/datatables/jquery.dataTables.js"></script>
  <script>
    $(document).ready(function() {
      $('.datatable-1').dataTable();
      $('.dataTables_paginate').addClass("btn-group datatable-pagination");
      $('.dataTables_paginate > a').wrapInner('<span />');
      $('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
      $('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
    } );
  </script>
</body>
