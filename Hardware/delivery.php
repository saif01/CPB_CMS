<?php
session_start();
include('../Admin/include/config.php');

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
          $D_status='Delivered';
          $complaintnumber=$_GET['cid'];
           $name=$_POST['fullname'];
           $phone=$_POST['contract'];
           $position=$_POST['position'];
    

          $actionby=$_SESSION['harlogin'];

    $query=mysqli_query($con,"INSERT INTO `delivery`(`complaintNumber`, `name`, `phone`, `position`, `actionby`, `d_status`) VALUES ('$complaintnumber','$name','$phone','$position','$actionby','$D_status')");

    $query1=mysqli_query($con,"UPDATE `tblcomplaints` SET `d_status`='$D_status' WHERE `complaintNumber`='$complaintnumber'");

    $query2=mysqli_query($con,"INSERT INTO `complaintremark`(`complaintNumber`, `status`, `actionby`) VALUES ('$complaintnumber','$D_status','$actionby' )");


        echo "<script>alert('Product delivery successfully'),
window.onunload = refreshParent;

    function refreshParent() {
        window.opener.location.reload();
    }
 
window.close();</script>";

  }

// email sending

if(isset($_POST['update']))
    {
        $to =$value['userEmail'];
       // $to =$_POST['userEmail'];
    //$to = "syful.cse.bd@gmail.com"; // this is your Email address
   // $from = "C.P.Bangladesh@gmail.com "; // this is the sender's Email address
  
    //$message = "This is a problem mail and Problem Code:".$cmpn ." ". $category . "  -- Problem in :   " . $subcategory . " -- Complain for :  " .$complain_for . " -- From : " .$state .".";
    $name=$_POST['fullname'];
    $phone=$_POST['contract'];
    $actionby=$_SESSION['harlogin'];

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                
                        // Additional headers
     $subject='Product delivery Status';           
    $headers[] = 'From: cpbangladesh.com';
    
    $message=" <html>
                                <font size='5' color='green'>Dear Complainer,This Is Your Complain update.</font><br><br>
                                <font size='4' color='blue'>Your Product received by : <b>".$name."</b></font><br>
                                <font size='3' color='#307221'>Product Receiver Phone Number : <b>" . $phone ."</b>.</font><br>
                                <font size='3' color='#307221'>Product Delivered By :<b> " . $actionby ."</b>.</font><br>


                                <font size='2' color=''> Thank you, Sir.</font><br>
                          </html> ";
   // $headers = "From:" . $from;
   // $headers2 = "From:" . $to;
    mail($to,$subject,$message,implode("\r\n", $headers));

    }




 ?>
    <script language="javascript" type="text/javascript">
        function f2() {
            window.close();
        }
        ser

        function f3() {
            window.print();
        }
    </script>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Hardware|CPB|Delivery Report</title>
        <link rel="icon" type="img/png" href="../img/logo.png" />
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="anuj.css" rel="stylesheet" type="text/css">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    </head>

    <body>

        <div style="margin-left:50px;">
            <form name="updateticket" id="updatecomplaint" method="post">
                <table width="" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr height="50">
                        <td>Complaint Number:</td>
                        <td>
                            <?php echo htmlentities($_GET['cid']); ?>
                        </td>
                    </tr>
                    <tr height="20">
                        <td>Complain From:</td>

                        <td>
                            <?php print_r($value['branch']); ?> </td>
                    </tr>
                    <tr height="30">
                        <td>User Email:</td>

                        <td>
                            <?php print_r($value['userEmail']); ?> </td>
                    </tr>
                    <tr height="30">
                        <td>User Number:</td>

                        <td>
                            <?php print_r($value['contactNo']); ?> </td>
                    </tr>



                    <tr height="50">
                        <td><label><i class="icon-pencil"></i>Receiver's Name</label></td>
                        <td><input type="text" name="fullname" required="required" value="" > </td>
                    </tr>

                    <tr height="50">
                        <td><label class="col-sm-2 col-sm-2 control-label"><i class="icon-pencil"></i>Receiver's Contract: </label></td>
                        <td><input type="int" name="contract" required="required" value="" > </td>
                    </tr>

                    <tr height="50">
                        <td><label class="col-sm-2 col-sm-2 control-label"><i class="icon-pencil"></i>Receiver's Post</label></td>
                        <td><input type="text" name="position" required="required" value="" > </td>
                    </tr>




                    <tr height="50">
                        <td>&nbsp;</td>
                        <td><i class="icon-ok"></i><input type="submit" name="update" value="Submit"></td>
                    </tr>



                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    


                </table>
            </form>
        </div>

    </body>

    </html>

    <?php } ?>