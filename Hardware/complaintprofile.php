<?php
session_start();
include('../Admin/include/config.php');
if(strlen($_SESSION['harlogin'])==0)
  { 
header('location:../login');
}
else{

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
        <title>Complaimt Details</title>
        <link rel="icon" type="img/png" href="../img/logo.png" />
        <link href="style.css" rel="stylesheet" type="text/css" />
        <link href="anuj.css" rel="stylesheet" type="text/css">
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
                                    <h3>Complaint Details</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">

                                        <tbody>

                                            <?php $st='closed';
$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name,category.categoryName as catname from tblcomplaints join users on users.id=tblcomplaints.userId join category on category.id=tblcomplaints.category where tblcomplaints.complaintNumber='".$_GET['cid']."'");
while($row=mysqli_fetch_array($query))
{

?>
                                            <tr>
                                                <td><b>Complaint Number</b></td>
                                                <td>
                                                    <?php echo htmlentities($row['complaintNumber']);?>
                                                </td>
                                                <td><b>Complainant Name</b></td>
                                                <td>
                                                    <?php echo htmlentities($row['name']);?>
                                                </td>
                                                <td><b>Reg Date</b></td>
                                                <td>
                                                    <?php echo htmlentities($row['regDate']);?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>Category </b></td>
                                                <td>
                                                    <?php echo htmlentities($row['catname']);?>
                                                </td>
                                                <td><b>SubCategory</b></td>
                                                <td>
                                                    <?php echo htmlentities($row['subcategory']);?>
                                                </td>
                                                <td><b>Complain For</b></td>
                                                <td>
                                                    <?php echo htmlentities($row['complaintType']);?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>State </b></td>
                                                <td>
                                                    <?php echo htmlentities($row['state']);?>
                                                </td>
                                                <td><b>Nature of Complaint</b></td>
                                                <td colspan="3">
                                                    <?php echo htmlentities($row['noc']);?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><b>Complaint Details </b></td>

                                                <td colspan="5">
                                                    <?php echo htmlentities($row['complaintDetails']);?>
                                                </td>

                                            </tr>

                                            </tr>
                                            <tr>
                                                <td><b>File(if any) </b></td>

                                                <td colspan="5">
                                                    <?php $cfile=$row['complaintFile'];
if($cfile=="" || $cfile=="NULL")
{
  echo "File NA";
}
else{?>
                                                    <a href="../users/complaintdocs/<?php echo htmlentities($row['complaintFile']);?>" target="_blank" /> View File</a>
                                                    <?php } ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>Final Status</b></td>

                                                <td colspan="5">
                                                    <?php if($row['status']=="")
                      { echo "Not Process Yet";
} else {
                     echo htmlentities($row['status']);
                     }?>
                                                </td>

                                            </tr>

                                            <?php $ret=mysqli_query($con,"select complaintremark.remark as remark,complaintremark.status as sstatus,complaintremark.remarkDate as rdate from complaintremark join tblcomplaints on tblcomplaints.complaintNumber=complaintremark.complaintNumber where complaintremark.complaintNumber='".$_GET['cid']."'");
while($rw=mysqli_fetch_array($ret))
{
?>
                                            <tr>
                                                <td><b>Remark</b></td>
                                                <td colspan="5">
                                                    <?php echo  htmlentities($rw['remark']); ?> <b>Remark Date :</b>
                                                    <?php echo  htmlentities($rw['rdate']); ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><b>Status</b></td>
                                                <td colspan="5">
                                                    <?php echo  htmlentities($rw['sstatus']); ?>
                                                </td>
                                            </tr>
                                            <?php }?>


                                    </table>
                                    </form>
                                </div>

    </body>

    </html>

    <?php } ?>