<?php
session_start();
include('../Admin/include/config.php');

$_comid=$_GET['cid'];
//$_sql="SELECT userEmail FROM tblcomplaints INNER JOIN users ON tblcomplaints.userId = users.id WHERE complaintNumber=$_comid limit 1";

$_sql="SELECT branch,userEmail,contactNo FROM tblcomplaints INNER JOIN users ON tblcomplaints.userId = users.id WHERE complaintNumber=$_comid limit 1";

$result = mysqli_query($con,$_sql);
$value = $result->fetch_assoc();

// 

$query1=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `complaintNumber`='$_comid'");
$row2=mysqli_fetch_array($query1);

//print_r ($row2);

$dept=$row2[5];


if(strlen($_SESSION['applogin'])==0)
  { 
header('location:../login');
}
else {
  if(isset($_POST['update']))
  {
$complaintnumber=$_GET['cid'];


$status=$_POST['status'];
$remark=$_POST['remark'];

$actionby=$_SESSION['applogin'];




$query=mysqli_query($con,"insert into complaintremark(complaintNumber,tools,status,remark,com_dept,actionby) values('$complaintnumber','','$status','$remark','$dept','$actionby')");
$sql=mysqli_query($con,"update tblcomplaints set status='$status' where complaintNumber='$complaintnumber'");

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
        $to =$value['userEmail'];
       
    //$to = "syful.cse.bd@gmail.com"; // this is your Email address
   // $from = "C.P.Bangladesh@gmail.com "; // this is the sender's Email address
  
    //$message = "This is a problem mail and Problem Code:".$cmpn ." ". $category . "  -- Problem in :   " . $subcategory . " -- Complain for :  " .$complain_for . " -- From : " .$state .".";
    $sub ="Application Complain No:".$complaintnumber."";
    $status_c =$_POST['status'];
    $all_remark=$_POST['remark'];
     

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                
                        // Additional headers
                
    $headers[] = 'From: cpbangladesh.com';
    
    $message=" <html>
                                <font size='5' color='green'>Dear Complainer,This Is Your Complain update.</font><br><br><hr>
                                <font size='4' color='blue'>Your Complain Status is : <b>".$status_c."</b></font><br>
                                <font size='3' color='#307221'>Your Complain remarks is : <b> " . $all_remark ."</b>.</font><hr><br><br><br>
                                
                               <b> Support Team: </b>
                               <font size='' color='green'>
                                Md.Abul Kalam Azad  <br>
                                Contract: 01766668845 <br>
                                
                                Holding No: E-236, Ward No: 007, Chandra, Kaliyakor, Gazipur <br>
                                </font>
                                <font size='2' color=''> Thank you, Sir.</font><br>
                          </html> ";
   // $headers = "From:" . $from;
   // $headers2 = "From:" . $to;
    mail($to,$sub,$message,implode("\r\n", $headers));

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
<title>Application|CPB|User Profile</title>
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
      <td><b>Status</b></td>
      <td><select name="status" required="required">
      <option value="">Select Status</option>
      <option value="in process">In Process</option>
    <option value="closed">Closed</option>
        
      </select></td>
    </tr>


   
      <tr height="50">
      <td><b>Remark</b></td>
      <td><textarea name="remark" cols="50" rows="10" placeholder="Write Somthing about this problem...... Like How Many times require to solve this issue" required="required"></textarea></td>
    </tr>
    


        <tr height="50">
      <td>&nbsp;</td>
      <td><i class="icon-ok"></i><input type="submit" name="update" value="Submit"></td>
    </tr>



       <tr><td colspan="2">&nbsp;</td></tr>
    
    <tr>
  <td></td>
      <td ><i class="icon-off"></i>   
      <input name="Submit2" type="submit" class="txtbox4" value="Close this window " onClick="return f2();" style="cursor: pointer;"  /></td>
      
       
    </tr>
   

 
</table>
 </form>
</div>

</body>
</html>

     <?php } ?>