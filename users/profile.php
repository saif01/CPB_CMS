<?php
session_start();
error_reporting(0);
include('../Admin/include/config.php');
if (strlen($_SESSION['userlogin'])==0)
  { 
    header('location:../login');
  }
else{
date_default_timezone_set('Asia/Dhaka');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>CMS |User Change Password</title>
        <link rel="icon" type="img/png" href="../img/logo.png" />

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">

    </head>

    <body>

        <section id="container">
            <?php include("includes/header.php");?>
            <?php include("includes/sidebar.php");?>
            <section id="main-content">
                <section class="wrapper">
                    <h3><i class="fa fa-angle-right"></i> Profile info</h3>

                    <!-- BASIC FORM ELELEMNTS -->
                    <div class="row mt">
                        <div class="col-lg-12 transStyle">
                            <div class="form-panel transStyle">





                                <?php $query=mysqli_query($con,"select * from users where userEmail='".$_SESSION['userlogin']."'");
                             while($row=mysqli_fetch_array($query)) 
                             {
                             ?>

                                <h4 class="mb"><i class="fa fa-user"></i>&nbsp;&nbsp;
                                    <?php echo htmlentities($row['fullName']);?>'s Profile Details :</h4>
                                <h5><b>Last Updated at :</b>&nbsp;&nbsp;
                                    <?php echo htmlentities($row['updationDate']);?>
                                </h5>
                                <form class="form-horizontal style-form" method="post" name="profile">

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Full Name : </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="fullname" required="required" value="<?php echo htmlentities($row['fullName']);?>" class="form-control" readonly>
                                        </div>
                                        <label class="col-sm-2 col-sm-2 control-label">User E-mail : </label>
                                        <div class="col-sm-4">
                                            <input type="email" name="useremail" required="required" value="<?php echo htmlentities($row['userEmail']);?>" class="form-control" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">Contact number : </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="contactno" required="required" value="<?php echo htmlentities($row['contactNo']);?>" class="form-control" readonly>
                                        </div>
                                        <label class="col-sm-2 col-sm-2 control-label">Department Name: </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="Department" required="required" value="<?php echo htmlentities($row['dept']);?>" class="form-control" readonly>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label" readonly>Sub Department : </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="Sub_department" required="required" value="<?php echo htmlentities($row['sub_dept']);?>" class="form-control" readonly>

                                        </div>
                                        <label class="col-sm-2 col-sm-2 control-label" readonly>Branch Name : </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="branch" required="required" value="<?php echo htmlentities($row['branch']);?>" class="form-control" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">OfficeID Number : </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="OfficeID" maxlength="6" required="required" value="<?php echo htmlentities($row['off_id']);?>" class="form-control" readonly>
                                        </div>
                                        <label class="col-sm-2 col-sm-2 control-label">Registration Date : </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="regdate" required="required" value="<?php echo htmlentities($row['regDate']);?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">National ID : </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="OfficeID" maxlength="6" required="required" value="<?php echo htmlentities($row['nid']);?>" class="form-control" readonly>
                                        </div>
                                        <label class="col-sm-2 col-sm-2 control-label">B.U. Head Nmae : </label>
                                        <div class="col-sm-4">
                                            <input type="text" name="regdate" required="required" value="<?php echo htmlentities($row['bu_head']);?>" class="form-control" readonly>
                                        </div>
                                    </div>


                                    <?php } ?>


                                </form>
                            </div>
                        </div>
                    </div>



                </section>
            </section>
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
        <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

        <!--custom switch-->
        <script src="assets/js/bootstrap-switch.js"></script>

        <!--custom tagsinput-->
        <script src="assets/js/jquery.tagsinput.js"></script>

        <!--custom checkbox & radio-->

        <script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>

        <script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


        <script src="assets/js/form-component.js"></script>


        <script>
            //custom select box

            $(function() {
                $('select.styled').customSelect();
            });
        </script>

    </body>

    </html>
    <?php } ?>