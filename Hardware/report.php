<?php
session_start();
include('../Admin/include/config.php');
if(strlen($_SESSION['harlogin'])==0)
    {   
header('location:../login');
}
else{


$comnum=$_GET['cid'];

$_sql="SELECT * FROM `delivery` WHERE `complaintNumber`='$comnum'";

$result = mysqli_query($con,$_sql);
$value = $result->fetch_assoc();

$_sql2="SELECT `w_status` FROM `tblcomplaints` WHERE `complaintNumber`='$comnum'";

$result2 = mysqli_query($con,$_sql2);
$value2 = $result2->fetch_assoc();

//SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name = table2.column_name;




?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hardware|CPB|Complaint Details</title>
        <link rel="icon" type="img/png" href="../img/logo.png" />
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        <script language="javascript" type="text/javascript">
            var popUpWin = 0;

            function popUpWindow(URLStr, left, top, width, height) {
                if (popUpWin) {
                    if (!popUpWin.closed) popUpWin.close();
                }
                popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + 650 + ',height=' + 600 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
            }
        </script>

        <!-- Print section code start -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#p_saif").html();
            var printWindow = window.open('', '', 'height=600,width=1000');
            printWindow.document.write('<html><head><title>Hardware Complain Details </title>');
            printWindow.document.write('</head><hr>Verified by CMS Hardware Team C.P. Bangladesh.<hr><body> ');
            printWindow.document.write(divContents);
            printWindow.document.write('<hr>©C.P. Bangladesh All rights reserved<hr></body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
   <!-- Print section code end --> 

    </head>

    <body>
        

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    
                    <!-- <div class="span9"> -->
                        <div class="content">

                            <div id="p_saif" class="module">
                                <div class="module-head">
                                    <h3>Complaint Details</h3>
                                </div>

                                <div  class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">

                                        <tbody>

                                            <?php 
$st='closed';
$query=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `complaintNumber`='$comnum'");
while($row=mysqli_fetch_array($query))
{

?>
                                            <tr>
                                                <td><b>Complaint Number</b></td>
                                                <td>
                            <?php echo htmlentities($row['complaintNumber']);?>
                                                </td>
                                                <td><b>Category</b></td>
                                                <td>
                            <?php echo htmlentities($row['cat_dep']);?>
                                                </td>
                                                <td><b>Reg Date</b></td>
                                                <td>
                            <?php echo htmlentities($row['regDate']);?>
                                                </td>
                                            </tr>

                                            <tr>

                                                <td><b>SubCategory</b></td>
                                                <td>
                                                    <?php echo htmlentities($row['subcategory']);?>
                                                </td>


                                                <td><b>Model & Serial</b></td>
                                                <td>
                                                    <?php echo htmlentities($row['noc']);?>
                                                </td>

                                                <td><b>Complain For </b></td>
                                                <td>
                                                    <?php echo htmlentities($row['complaintType']);?>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td><b>Complaint Details </b></td>

                                                <td colspan="5">
                                                    <?php echo ($row['complaintDetails']);?>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><b>Accessories Send  </b></td>

                                                <td colspan="5">
                                                    <?php echo htmlentities($row['tools']);?>
                                                </td>

                                            </tr>


                                            <td><b>File(if any) </b></td>

                                            <td colspan="5">
                                                <?php $cfile=$row['complaintFile'];
                                                    if($cfile=="" || $cfile=="NULL")
                                                    {
                                                      echo "File NA";
                                                    }
                                                    else{?>
                                                <a href="../complaintdocs/<?php echo htmlentities($row['complaintFile']);?>" target="_blank" /> View File</a>
                                                <?php } ?>
                                            </td>
                                            </tr>

                                            <tr>
                                                <td><b>Final Status</b></td>

                                                <td colspan="5">
                                        <?php if($row['status']=="")
                                        { echo "Not Process Yet"; } 
                                                else {
                                         echo htmlentities($row['status']);
                                         }?>
                                                </td>

                                            </tr>

                                            <tr>
                                                <td><b>Warranty Status</b></td>

                                            <td colspan="5">
                            <?php 
                    if($row['status']=="")
                        { echo "Not Process Yet";}
                    elseif($row['w_status']=="Non Warranty")
                        { echo "This is a non Warranty Product"; } 
                    elseif($row['w_status']=="Warranty") 
                        { echo "<b>This Product send to Warranty Service</b>"; }
                    elseif($row['w_status']=="Warranty_back") 
                        { echo "<b>Complited Warranty Service</b>"; }
                    elseif($row['w_status']=="Warranty_go") 
                        { echo "<b>Again send to Warranty Service</b>"; }?>

                                            </td>

                                            </tr>

                                            <?php



 $ret=mysqli_query($con,"select complaintremark.remark as remark,complaintremark.status as sstatus,complaintremark.actionby as actionby,complaintremark.remarkDate as rdate from complaintremark join tblcomplaints on tblcomplaints.complaintNumber=complaintremark.complaintNumber where complaintremark.complaintNumber='$comnum'");
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

                                                

                                                <tr>
                                                    <td><b>Action By</b></td>
                                                    <td colspan="5">
                    <?php echo  htmlentities($rw['actionby']); ?>
                                                    </td>
                                                </tr>


<?php }?>
                                                <tr>
                                                    <td><b>Action</b></td>
                                                    
                                                    <td>
            <a href="javascript:void(0);" onClick="popUpWindow('userprofile.php?uid=<?php echo htmlentities($row['userId']);?>');" title="Update order">
            <button type="button" class="btn btn-primary"><i class="icon-user"></i>User Detials</button></a>

                                                  </td>
                                                   
                                                    
                                                    <td>

           
<button id="btnPrint" type="button" class="btn btn-warning ml-10 " ><i class="icon-print"></i> Print
                                                     </button>

                                                    </td>

                                                </tr>
                                                <?php  } ?>

                                    </table>
                                </div>
                            </div>



                        </div>
                        <!--/.content-->
                    
                    
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->



        <script>
            function myFunction() {
                window.print();
            }

            function printContent(el){
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                document.body.innerHTML = printcontent;
                window.print();
                document.body.innerHTML = restorepage;
                }
        </script>


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
            });
        </script>
    </body>
    <?php } ?>