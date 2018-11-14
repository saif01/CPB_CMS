<?php
session_start();
include('../Admin/include/config.php');
date_default_timezone_set('Asia/Dhaka');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

$_comid=$_GET['cid'];
//$_sql="SELECT userEmail FROM tblcomplaints INNER JOIN users ON tblcomplaints.userId = users.id WHERE complaintNumber=$_comid limit 1";

$_sql="SELECT branch,userEmail,contactNo FROM tblcomplaints INNER JOIN users ON tblcomplaints.userId = users.id WHERE complaintNumber=$_comid limit 1";

$result = mysqli_query($con,$_sql);
$value = $result->fetch_assoc();



if(strlen($_SESSION['harlogin'])==0)
  { 
header('location:../login');
}
else {
  if(isset($_POST['update']))
  {
  $complaintnumber=$_GET['cid'];


  $status=$_POST['status'];
  $remark=$_POST['remark'];
  $w_status=$_POST['w_status'];
  $actionby=$_SESSION['harlogin'];

$sql2=mysqli_query($con,"SELECT `w_status`,`lastUpdationDate`,`timeRequire` FROM `tblcomplaints` WHERE `complaintNumber`='$complaintnumber'");
while($row3=mysqli_fetch_array($sql2))
    {

      $wS=$row3['w_status'];
      
       if ($wS=="Warranty") 
       {  
        $previous_qty=$row3['timeRequire'];
 //Start Time Subtraction and convert to days.
        $ts2    =   strtotime($previous_qty);
        $ts1    =   strtotime($currentTime);
        $seconds    = abs($ts2 - $ts1); # difference will always be positive
        $days = $seconds/60/60/24;
  //Start Time Subtraction and convert to days.

        $Sql4=mysqli_query($con,"UPDATE `tblcomplaints` SET `timeRequire`='$days' WHERE `complaintNumber`='$complaintnumber'"); 
       }
       else
        {
          $previous_qty=$row3['lastUpdationDate'];
          $ts2    =   strtotime($previous_qty);
          $ts1    =   strtotime($currentTime);
          $seconds    = abs($ts2 - $ts1); # difference will always be positive
          $days = $seconds/60/60/24;
          $preValu=$row3['timeRequire'];
          $final=$preValu + $days;

          $Sql5=mysqli_query($con,"UPDATE `tblcomplaints` SET `timeRequire`='$final' WHERE `complaintNumber`='$complaintnumber'"); 

        }
     }


$query=mysqli_query($con,"insert into complaintremark(complaintNumber,status,remark,actionby) values('$complaintnumber','$status','$remark','$actionby')");
$sql=mysqli_query($con,"UPDATE `tblcomplaints` SET `status`='$status',`w_status`='$w_status' WHERE `complaintNumber`='$complaintnumber'");


echo "<script>alert('Complaint details updated successfully'),
window.onunload = refreshParent;

    function refreshParent() {
        window.opener.location.reload();
    }
 
window.close(); </script>";

  }

// email sending

if(isset($_POST['update']))
    {
      
      if ($w_status=="Warranty_go") {

        $to =$value['userEmail'];
    $sub ="Hardware Complain No:".$complaintnumber."";
    $status_c =$_POST['status'];
    $all_remark=$_POST['remark'];
      $toolsarr=$_POST['tools'];
    $tools= implode(",",$toolsarr);

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                
                        // Additional headers
                
    $headers[] = 'From: cpbangladesh.com';
    
    $message=" <html>
  <font size='5' color='green'>Dear Complainer,This Is Your Complain update.</font><br><br><hr><font size='4' color='blue'>Your Complain Status is : <b>".$status_c."</b> </font><br><font size='3' color='blue'>After completing warranty service your product reached at our hardware section But problem not solved Properly, That's why product send again Warranty service.</b> </font><br><font size='3' color='#307221'>Your Complain remarks is :  <b> " . $all_remark ." </b>.</font><hr><br><br><br>
                                
           <b> Support Team: </b><br><font size='' color='green'>Md. Moniruzzaman <br>
      Contract: 01787692529 <br> Md. Polash Mahamud <br> Contract: 01787692530 <br>
      Holding No: E-236, Ward No: 007, Chandra, Kaliyakor, Gazipur <br></font>
      <font size='2' color=''> Thank you, Sir.</font><br>
                          </html> ";
  
        mail($to,$sub,$message,implode("\r\n", $headers));
        } 
        else
        {
          $to =$value['userEmail'];
    $sub ="Hardware Complain No:".$complaintnumber."";
    $status_c =$_POST['status'];
    $all_remark=$_POST['remark'];
      $toolsarr=$_POST['tools'];
    $tools= implode(",",$toolsarr);

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                
                        // Additional headers
                
    $headers[] = 'From: cpbangladesh.com';
    
    $message=" <html>
    <font size='5' color='green'>Dear Complainer,This Is Your Complain update.</font><br><br><hr><font size='4' color='blue'>Your Complain Status is : <b>".$status_c."</b> </font><br><font size='3' color='blue'>After completing warranty service your product reached at our hardware section.</b> </font><br>
      <font size='3' color='#307221'>Your Complain remarks is :  <b> " . $all_remark ." </b>.</font><hr><br><br><br>
                                
         <b> Support Team: </b><br><font size='' color='green'>Md. Moniruzzaman <br>
      Contract: 01787692529 <br> Md. Polash Mahamud <br> Contract: 01787692530 <br>
      Holding No: E-236, Ward No: 007, Chandra, Kaliyakor, Gazipur <br></font>
      <font size='2' color=''> Thank you, Sir.</font><br>
                          </html> ";
    mail($to,$sub,$message,implode("\r\n", $headers));
        }
    }

 ?>
<script language="javascript" type="text/javascript">
        function f2()
        {
        window.close();
        }ser
        function f3()
        {
        window.print(); 

        }
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hardware|CPB|User Profile</title>
<link rel="icon" type="img/png" href="../img/logo.png"/>
<link href="style.css" rel="stylesheet" type="text/css" >
<link href="anuj.css" rel="stylesheet" type="text/css">
<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
</head>
<body>

<div style="margin-left:50px;">
 <form name="updateticket" id="updatecomplaint" method="post"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td  >&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr height="50">
      <td>Complaint Number:</td>
      <td><?php echo htmlentities($_GET['cid']); ?></td>
    </tr>
    <tr height="20">
      <td>Complain From:</td>
      
      <td><?php print_r($value['branch']); ?> </td>
    </tr>
    <tr height="30">
      <td>User Email:</td>
      
      <td><?php print_r($value['userEmail']); ?> </td>
    </tr>
    <tr height="30">
      <td>User Number:</td>
      
      <td><?php print_r($value['contactNo']); ?> </td>
    </tr>

     <tr height="50">
      <td><b>Warranty Status</b></td>
      <td><select name="w_status" required="required">
      <option value="">Select Status</option>
      <option value="Warranty_go">Send To Warrenty Again</option>
    <option value="Warranty_back">Come Back Warrenty</option>      
      </select></td>
    </tr> 

    <tr height="50">
      <td><b>Status</b></td>
      <td><select name="status" required="required">
      <option value="">Select Status</option>
      <option value="in process">In Process</option>
    <option value="closed">Closed</option>
        
      </select></td>
    </tr>



      <tr height="50">
      <td><b>Remark</b></td>
      <td><textarea name="remark" cols="50" rows="10" placeholder="Write Somthing about this problem...... Like How Many days require to solve this issue" required="required"></textarea></td>
    </tr>
    


        <tr height="50">
      <td>&nbsp;</td>
      <td><i class="icon-ok"></i><input type="submit" name="update" value="Submit"></td>
    </tr>



       <tr><td colspan="2">&nbsp;</td></tr>
    
       
 
</table>
 </form>
</div>

</body>
</html>

     <?php } ?>