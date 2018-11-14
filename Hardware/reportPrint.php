<?php
session_start();
include('../Admin/include/config.php');
if(strlen($_SESSION['harlogin'])==0)
    {   
    header('location:../login');
    }
else{
    date_default_timezone_set('Asia/Dhaka');// change according timezone
    $currentTime = date( 'd-m-Y h:i:s A', time () );
    
    $curTime=date('h:i:s A');
     
$category="Hardware"

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hardware|CPB|Report</title>
        <link rel="icon" type="img/png" href="../img/logo.png" />
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        <!-- Print section code start -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
            $("#btnPrint").live("click", function() {
                var divContents = $("#Report").html();
                var printWindow = window.open('', '', 'height=600,width=1000');
                printWindow.document.write('<html><head><title>Hardware Reports</title>');
                printWindow.document.write('</head><hr>Verified by CMS Hardware Team ©C.P. Bangladesh.<hr><body >');
                printWindow.document.write(divContents);
                printWindow.document.write('<hr>©C.P. Bangladesh All rights reserved<hr></body></html>');
                printWindow.document.close();
                printWindow.print();
            });

        </script>
        <!-- Print section code end -->


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
                                    <h3>Report</h3>
                                </div>
                                <?php
  if (isset($_POST['submit'])) {?>
                                    <!-- <button onclick="printContent('p_saif')" name="submit" type="submit" class="btn btn-primary"> Export as PDF</button> -->

                                    <button id="btnPrint" name="submit" type="submit" class="btn btn-primary"> Print Or Save as PDF</button>
                                    <?php  } 

?>
                                    <form class="form-horizontal row-fluid" action="" method="post">



                                        <div class="control-group">
                                            <label class="control-label" for="basicinput"> End Date : </label>
                                            <div class="controls">
                                                <input type="date" placeholder="Enter category Name" name="endDate" class="span10 tip" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput"> Start Date : </label>
                                            <div class="controls">
                                                <input type="date" placeholder="Enter category Name" name="startDate" class="span10 tip" required>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <button name="submit" type="submit" class="btn btn-primary span10"><i class="icon-tags"> </i>View Report</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="module-body table">

                                        <?php           
 if(isset($_POST['submit']))
{
     $startDate= $_POST['startDate'];
     $endDate=$_POST['endDate'];

 $date1 = new DateTime($startDate);
   $date2 = new DateTime($endDate);

$sdate=$date1->format('Y.m.d'); 
$edate=$date2->format('Y.m.d');

$sdate2=$date1->format('d.M.Y');
$edate2=$date2->format('d.M.Y'); 
  
?>
                                        <b style="margin-left: 25%"><?php echo "$category"; ?> Reports~~~ <?php echo $sdate2; ?>~~ to ~~<?php echo $edate2; ?></b>

                                        <table cellpadding="2" cellspacing="0" border="5" class="table table-bordered table-striped  display" width="100%">
                                            <thead>

                                                <tr style="color:black; background-color: #9ce2aa;">

                                                    <th>UPS</th>
                                                    <th>Monitor</th>
                                                    <th>CPU</th>
                                                    <th>Printer</th>
                                                    <th>Others</th>


                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php 


$query=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `subcategory`='UPS' AND `regDate` >= '$sdate' AND `regDate` <= '$edate'");
$upsCount=mysqli_num_rows($query);

$query=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `subcategory`='Monitor' AND `regDate` >= '$sdate' AND `regDate` <= '$edate'");
$monitorCount=mysqli_num_rows($query);

$query=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `subcategory`='Desktop Computer' AND `regDate` >= '$sdate' AND `regDate` <= '$edate'");
$cpuCount=mysqli_num_rows($query);


$query=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `subcategory`='Printer' AND `regDate` >= '$sdate' AND `regDate` <= '$edate'");
$printerCount=mysqli_num_rows($query);


$query=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `subcategory`!='Printer' AND `subcategory`!='UPS' AND `subcategory`!='Monitor' AND `subcategory`!='Desktop Computer' AND `regDate` >= '$sdate' AND `regDate` <= '$edate'");
$otherCount=mysqli_num_rows($query);



?>
                                                <tr>
                                                    <td>
                                            <?php echo htmlentities($upsCount);?>
                                                    </td>
                                                    <td>
                                            <?php echo htmlentities($monitorCount);?>
                                                    </td>
                                                    <td>
                                            <?php echo htmlentities($cpuCount);?>
                                                    </td>
                                                    <td>
                                            <?php echo htmlentities($printerCount);?>
                                                    </td>
                                                    <td>
                                            <?php echo htmlentities($otherCount);?>
                                                    </td>
                                                </tr>

                                            </tbody>

                                            <thead>
                                                <tr style="color:black; background-color: #edcc8b;">

                                                    <th>UPS Delay</th>
                                                    <th>Monitor Delay</th>
                                                    <th>CPU Delay</th>
                                                    <th>Printer Delay</th>
                                                    <th>Others Delay</th>


                                                </tr>
                                            </thead>

                                            <tbody>

                                                <?php 
$query2=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `subcategory`='UPS' AND `w_status`='Non Warranty' AND `timeRequire`>7 AND `regDate` >= '$sdate' AND `regDate` <= '$edate'");
$upsCount2=mysqli_num_rows($query2);

$query2=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `subcategory`='Monitor' AND `w_status`='Non Warranty' AND `timeRequire`>7 AND `regDate` >= '$sdate' AND `regDate` <= '$edate'");
$monitorCount2=mysqli_num_rows($query2);

$query2=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `subcategory`='Desktop Computer' AND `w_status`='Non Warranty' AND `timeRequire`>7 AND `regDate` >= '$sdate' AND `regDate` <= '$edate'");
$cpuCount2=mysqli_num_rows($query2);


$query2=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `subcategory`='Printer' AND `w_status`='Non Warranty' AND `timeRequire`>7 AND `regDate` >= '$sdate' AND `regDate` <= '$edate'");
$printerCount2=mysqli_num_rows($query2);


$query2=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `subcategory`!='Printer' AND `subcategory`!='UPS' AND `subcategory`!='Monitor' AND `subcategory`!='Desktop Computer' AND `w_status`='Non Warranty' AND `timeRequire`>7 AND `regDate` >= '$sdate' AND `regDate` <= '$edate'");
$otherCount2=mysqli_num_rows($query2);



?>

                                                <tr>
                                                    <td>
                                            <?php echo htmlentities($upsCount2);?>
                                                    </td>
                                                    <td>
                                            <?php echo htmlentities($monitorCount2);?>
                                                    </td>
                                                    <td>
                                            <?php echo htmlentities($cpuCount2);?>
                                                    </td>
                                                    <td>
                                            <?php echo htmlentities($printerCount2);?>
                                                    </td>
                                                    <td>
                                            <?php echo htmlentities($otherCount2);?>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>

                                        <table cellpadding="2" cellspacing="0" border="5" class="datatable-1 table table-bordered table-striped  display" width="100%">

                                            <thead>
                                                <tr style="color:black; background-color: #8bed93;">
                                                    <th>#</th>
                                                    <th>Type</th>
                                                    <th>Category</th>
                                                    
                                                    <th>Warranty</th>
                                                    <th>Com. Date</th>
                                                    <th>Require Days</th>
                                                    <th>C.Number</th>


                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php 

$query3=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `regDate` >= '$sdate' AND `regDate` <= '$edate'"); 
$cnt=1;
while($row=mysqli_fetch_array($query3))
{
?>
                                                <tr>
                                                    <td>
                                            <?php echo htmlentities($cnt);?>
                                                    </td>
                                                    <td>
                                            <?php echo htmlentities($row['cat_dep']); ?>
                                                    </td>
                                                    <td>
                                            <?php echo htmlentities($row['subcategory']); ?>
                                                    </td>
                                                    
                                                    <td>
                                        
<?php 
                        $w_status=$row['w_status'];
                        
                if($w_status=="Warranty" OR $w_status=="Warranty_go" OR $w_status=="Warranty_back" )
                            { ?>
                <button type="button" class="btn btn-primary">YES</button>
                         <?php }
                
                else{ ?>
                <button type="button" class="btn btn-danger">NO</button>
                                                <?php }
                
                                    ?>

                                                    </td>
                                                    <td>
                                    <?php echo htmlentities($row['lastUpdationDate']); ?>
                                                    </td>
                                                    <td>
                                <?php echo intval($row['timeRequire']); ?> ~ Days
                                <?php if ($row['timeRequire']>7 && $row['w_status']=='Non Warranty') {
                                 ?>
                <button type="button" class="btn btn-danger">Delay</button>
                                                <?php   
                                } ?>

                            </td>

                                <td>
                             


                             <a href="javascript:void(0);" onClick="popUpWindow('report.php?cid=<?php echo htmlentities($row['complaintNumber']);?>');" title="Update order ">
        <button type="button" class="btn btn-primary"><i class="icon-edit"></i> <?php echo htmlentities($row['complaintNumber']); ?></button></a>
                                                    </td>

                                                </tr>
                                                <?php $cnt=$cnt+1; } ?>

                                        </table>

                                        <?php }?>

                                        <!-- Statr Print Report Section p_saif  -->

                                        <div id="Report" style=" display: none;">


                            <div style="margin-left:15%; margin-top: 2%">
                    <b><?php echo "$category"; ?> Reports~<?php echo $sdate2; ?>~ to ~<?php echo $edate2; ?> </b><br>
                                                <b> Report generation Time :<?php echo $curTime; ?></b>
                                                <br>

                                            </div>
                                            <table border="2" style="width:80%; margin-left: 8%; margin-top: 2% ">


                                                <tr>
                                                    <th>UPS</th>
                                                    <th>UPS Delay</th>
                                                    <th>Monitor</th>
                                                    <th>Monitor Delay</th>
                                                    <th>CPU</th>
                                                    <th>CPU Delay</th>
                                                    <th>Printer</th>
                                                    <th>Printer Delay</th>
                                                    <th>Others</th>
                                                    <th>Others Delay</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo htmlentities($upsCount);?>
                                                    </td>
                                                    <td>
                                                        <?php echo htmlentities($upsCount2);?>
                                                    </td>

                                                    <td>
                                                        <?php echo htmlentities($monitorCount);?>
                                                    </td>
                                                    <td>
                                                        <?php echo htmlentities($monitorCount2);?>
                                                    </td>
                                                    <td>
                                                        <?php echo htmlentities($cpuCount);?>
                                                    </td>
                                                    <td>
                                                        <?php echo htmlentities($cpuCount2);?>
                                                    </td>
                                                    <td>
                                                        <?php echo htmlentities($printerCount);?>
                                                    </td>
                                                    <td>
                                                        <?php echo htmlentities($printerCount2);?>
                                                    </td>
                                                    <td>
                                                        <?php echo htmlentities($otherCount);?>
                                                    </td>
                                                    <td>
                                                        <?php echo htmlentities($otherCount2);?>
                                                    </td>
                                                </tr>

                                            </table>

                                            <table border="1" style="width:80%; margin-left: 8%; ">
                                                <tr> </tr>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Type</th>
                                                    <th>Category</th>
                                                    <th>Complain Number</th>
                                                    <th>Warranty Status</th>
                                                    <th>Register Date</th>
                                                    <th>Completed Date</th>
                                                    <th>Require Days</th>

                                                </tr>

                                                <tr>
                                                    <?php
     $cnt=1;
     $query2=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep`='$category' AND `status`='closed' AND `regDate` >= '$sdate' AND `regDate` <= '$edate'"); 
    while($row2=mysqli_fetch_array($query2))
    {
    ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo htmlentities($cnt);?>
                                                            </td>
                                                            <td>
                                                                <?php echo htmlentities($row2['cat_dep']); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo htmlentities($row2['subcategory']); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo htmlentities($row2['complaintNumber']); ?>
                                                            </td>
                                                            <td>
            <?php 
                        $w_status=$row2['w_status'];
                        
                if($w_status=="Warranty" OR $w_status=="Warranty_go" OR $w_status=="Warranty_back" )
                            { ?>
                "YES"
                         <?php }
                
                else{ ?>
                "NO"
                                                <?php }
                
                                    ?>
                                                            </td>
                                                            <td>
                                                                <?php echo htmlentities($row2['regDate']); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo htmlentities($row2['lastUpdationDate']); ?>
                                                            </td>
                                                            <td>
                                                                <?php echo intval($row2['timeRequire']); ?> ~ Days</td>
                                                        </tr>
                                                        <?php $cnt=$cnt+1; } ?>


                                            </table>
                                    </div>
                                        <!-- End Print Report Section   -->
                                 </div>
                                    <!--module-body table-->
                            </div>
                            <!--/ .module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>

            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->

        <script>
            function myFunction() {
                window.print();
            }

            function printContent(el) {
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

<script language="javascript" type="text/javascript">
            var popUpWin = 0;

            function popUpWindow(URLStr, left, top, width, height) {
                if (popUpWin) {
                    if (!popUpWin.closed) popUpWin.close();
                }
                popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + 800 + ',height=' + 600 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
            }
        </script>

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