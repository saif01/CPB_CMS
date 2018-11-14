<?php 
session_start();
error_reporting(0);
include('../Admin/include/config.php');
if(strlen($_SESSION['userlogin'])==0)
{ 
header('location:../login');
}
else{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>CMS | Complaint History</title>
    <link rel="icon" type="img/png" href="../img/logo.png" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/table-responsive.css" rel="stylesheet">

    <link type="text/css" href="../Admin/images/icons/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="saif/theme.css" rel="stylesheet">

</head>

<body>

    <section id="container">
        <?php include("includes/header.php");?>
        <?php include("includes/sidebar.php");?>

        <section id="main-content" class="mx-auto" style= "margin-left:225px;">
          <section class="wrapper" >
               
                <h3><i class="fa fa-angle-right"></i> Your Hardware Complaint Hstory</h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                            <section id="unseen">
                                <!--table  class="datatable-1 table table-bordered table-striped table-condensed" -->
                                    
                                    <table  class="datatable-1 table table-bordered table-striped display" >

                                    
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Complaint Number</th>
                                            <th>Category</th>
                                            <th>Reg Date</th>
                                            <th>last Updation date</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
<?php $query=mysqli_query($con,"select * from tblcomplaints where userId='".$_SESSION['id']."' AND `cat_dep` = 'Hardware' ORDER BY `complaintNumber` DESC");
                                $cnt=1;
                                while($row=mysqli_fetch_array($query))
                                    {
                                        ?>
                                        <tr>
                                            <td >
                                                    <?php echo htmlentities($cnt);?>
                                                </td>
                                            <td align="center">
                                <?php echo htmlentities($row['complaintNumber']);?>
                                            </td>
                                             <td align="center">
                                <?php echo htmlentities($row['cat_dep']);?>
                                            </td>
                                            <td align="center">
                                <?php echo htmlentities($row['regDate']);?>
                                            </td>
                                            <td align="center">
                                <?php echo  htmlentities($row['lastUpdationDate']);

                                 ?>
                                            </td>
                                            <td align="center">
                                <?php 
                        $status=$row['status'];
                        $d_status=$row['d_status'];
                        $w_status=$row['w_status'];
                if($status=="" or $status=="NULL")
                            { ?>
                <button type="button" class="btn btn-theme04">Not Process Yet</button>
                         <?php }
                if($status=="in process"){ ?>
                <button type="button" class="btn btn-warning">In Process</button>
                                                <?php }
                if($status=="closed") {?> 
                <button type="button" class="btn btn-success">Closed</button>
                                <?php } 
                if($d_status=="Delivered") {?> 
                <button type="button" class="btn btn-success">Delivered</button>
                                     <?php }
        if($w_status=="Warranty" or $w_status=="Warranty_go") {?> 
                <button type="button" class="btn btn-success">Warranty</button>
                                     <?php }

                if($w_status=="Warranty_back" or $w_status=="Non Warranty" ) { } ?>

                                             </td>

                                                <td align="center">
<a href="complaint-details-har.php?cid=<?php echo htmlentities($row['complaintNumber']);?>"><button type="button" class="btn btn-primary">View Details</button></a>
                                                </td>
                                        </tr>
                                        <?php $cnt=$cnt+1; } ?>

                                    </tbody>
                                </table>
                            </section>
                        </div>
                        <!-- /content-panel -->
                    </div>
                    <!-- /col-lg-4 -->
                </div>
                <!-- /row -->

            </section>
            <!--wrapper -->


        </section>
        <!-- /MAIN CONTENT -->
        <?php include("includes/footer.php");?>
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

    <!----------saif -->

    <script src="../Admin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="../Admin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="../Admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../Admin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="../Admin/scripts/datatables/jquery.dataTables.js"></script>
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

</html>
<?php } ?>