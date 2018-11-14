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
$toolsarr=$_POST['tools'];
 $tools= implode(",",$toolsarr);
$w_status=$_POST['w_status'];
$status=$_POST['status'];
$remark=$_POST['remark'];

$actionby=$_SESSION['harlogin'];


$query=mysqli_query($con,"INSERT INTO `complaintremark`(`complaintNumber`, `tools`, `status`, `remark`, `com_dept`, `actionby`) VALUES('$complaintnumber','$tools','$status','$remark','$actionby')");
$sql=mysqli_query($con,"UPDATE `tblcomplaints` SET `status`='$status',`w_status`='$w_status',`timeRequire`='$currentTime' WHERE `complaintNumber`='$complaintnumber'");

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

      if ($status=="in process" && $w_status=="Warranty" ) {
        $to =$value['userEmail'];
        $status_c =$_POST['status'];
        $sub ="Hardware Complain No:".$complaintnumber."";
        //For HTML Support Code in mail
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $message=" <html>
  <font size='5' color='green'>Dear Complainer,This Is Your Complain update.</font><br><br><hr>
  <font size='4' color='blue'>Your Complain Status is : <b>".$status_c."</b> </font><br>
  <font size='3' color='#307221'>Your Complain remarks is :  <b> " . $remark ." </b>.</font><br> <font size='3' color='blue'>Your product send to Warrenty service for repair purposes.</b> </font><br>
  <font size='2' color='red'> " . $tools ." We were received this accessories.</font><br><hr><br><br><br>
                                
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
    //$all_remark=$_POST['remark'];
      //$toolsarr=$_POST['tools'];
    //$tools= implode(",",$toolsarr);

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';             
    $headers[] = 'From: cpbangladesh.com';
    
    $message=" <html>
    <font size='5' color='green'>Dear Complainer,This Is Your Complain update.</font><br><br><hr>
    <font size='4' color='blue'>Your Complain Status is : <b>".$status_c."</b></font><br>
    <font size='3' color='#307221'>Your Complain remarks is :  <b> " . $remark ." </b>.</font><br><font size='2' color='red'> " . $tools ." We were received this accessories.</font><br><hr><br><br><br>                           
      <b> Support Team: </b><br><font size='' color='green'>Md. Moniruzzaman <br>
      Contract: 01787692529 <br> Md. Polash Mahamud <br> Contract: 01787692530 <br>
      Holding No: E-236, Ward No: 007, Chandra, Kaliyakor, Gazipur <br></font>
      <font size='2' color=''> Thank you, Sir.</font><br>
                          </html> ";
   // $headers = "From:" . $from;
   // $headers2 = "From:" . $to;
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
    <tr height="30">
      <td>Complaint Number: </td>
      <td><?php echo htmlentities($_GET['cid']); ?> </td>

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
      
      <td><?php print_r($value['contactNo']); ?>  </td>
    </tr> 

    <tr height="60">

            <td>Accessories Received:</td>
            <td> <hr>
                                                       <input type="checkbox" id="tools" name="tools[]" value="Mouse" > Mouse
                                                        <input type="checkbox" id="tools" name="tools[]" value="keybord" > keybord
                                                        <input type="checkbox" id="tools" name="tools[]" value="Power_Cord" > Power Cord <br>
                                                        <input type="checkbox" id="tools" name="tools[]" value="AC_Adeptar" > AC Adeptar
                                                        <input type="checkbox" id="tools" name="tools[]" value="VGA_Cord" > VGA Cord
                                                        <input type="checkbox" id="tools" name="tools[]" value="Usb_Cord" > Usb Cord <br>
                                                        <input type="checkbox" id="tools" name="tools[]" value="Power_Supply" > Power Supply
                                                        <input type="text" id="tools" name="tools[]" placeholder="Others" value=""  class="form-control"> 
                                                        <hr>
                                                        </td>     
  
    </tr>

    <tr height="50">
      <td><b>Warranty Status</b></td>
      <td><select name="w_status" required="required">
      <option value="">Select Status</option>
      <option value="Warranty">Yes</option>
    <option value="Non Warranty">No</option>      
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
      <td><textarea spellcheck="true" name="remark" cols="50" rows="10" placeholder="Write Somthing about this problem...... Like How Many days require to solve this issue" required="required"></textarea></td>
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