<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['mainAdmin'])==0)
	{	
header('location:../login');
}
else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin|CPB|Admin Manual</title>
    <link rel="icon" type="img/png" href="../img/logo.png" />
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="css/saiff.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>

<body style="background-image: url('../img/bg2.jpg'); background-size: cover; background-attachment: fixed; ">
    <?php include('include/header.php');?>

    <!-- header wrapper -->
    <div class="header-wrapper sm-padding bg-grey">
        <div class="container">

            <a href="../com_files/pdf/Manual.pdf" download class="btn btn-warning btn-lg" style="color: black;" > Downloas as PDF</a>
            <marquee>
                <h1>
                    <font color="#ADFF2F">Detail's manual for "Admin"</font>
                </h1>
            </marquee>
        </div>
    </div>
    <!-- /header wrapper -->

    <div  >
        
    </div>

    <!-- Blog -->
    <div class="align-middle" style="margin-left: 40px; margin-right: 40px;  background-color: #69E1F4; background-attachment: fixed ; font-family: sans-serif;">



        <div class="bg-transparent">
            <div class="">
                <div class="col-lg-1 col-centered"> </div>


                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin1.jpg" alt="Home page">
                    </div>

                    <div class="blog-text">

                        <h2>Home page</h2>
                        <font>

                            <p>
                                --Just click on <strong>"Admin"</strong> , Then you will go to Admin login page...
                            </p>
                        </font>
                    </div>

                </div>




                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin2.jpg" alt="Admin Login Page">
                    </div>
                    <div class="blog-text">
                        <h2>Admin Login Page</h2>
                        <font>

                            <p>
                                --Just put your user <strong>"name"</strong> on user name field and also put your oun<strong>"Password "</strong> in Password field. <br> Then click login Button.

                            </p>
                            </strong>
                    </div>
                </div>

                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin3.jpg" alt="Admin Management Dashboard">
                    </div>
                    <div class="blog-text">
                        <h2>Admin Management Dashboard</h2>
                        <font>

                            <p>
                                --This is C.P. Bangladesh Admin Management Dashboard.
                            </p>
                        </font>
                    </div>
                </div>





                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin17.jpg" alt="Change Admin Password">
                    </div>
                    <div class="blog-text">
                        <h2>Change Admin Password</h2>
                        <font>
                            <p>
                                --By using this option Admin can change their password very easily , put your <strong>Old password</strong> then put <strong> New Password</strong>.If you put correct information then you will see this message: <strong>"Password Changed Successfully".</strong>

                            </p>
                        </font>
                    </div>
                </div>

                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin4.jpg" alt="Admin Management Dashboard">
                    </div>
                    <div class="blog-text">
                        <h2>Admin Management Dashboard</h2>
                        <font>

                            <p>
                                --We can see how many <br> <strong>complain not yet Process, <br>Pending Complaint <br>Closed Complaint <br>
							 </strong>
                            </p>
                        </font>
                    </div>
                </div>





                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin5.jpg" alt="Admin Management Dashboard">
                    </div>
                    <div class="blog-text">
                        <h2>Hardware Complain Section</h2>
                        <font>

                            <p>
                                --If you Frist click on <strong>complain not yet Process</strong>,You will see how many complain reached here. <br> You click on <strong>View Details</strong> Then you wiil see details information about complain which we have.
                            </p>
                        </font>
                    </div>
                </div>

                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin6.jpg" alt="Complain Details Dashboard">
                    </div>
                    <div class="blog-text">
                        <h2>Complain Details Dashboard</h2>
                        <font>

                            <p>
                                --We can see here details complain.We take action about our complain, Then we click on <strong>Take Action</strong> by indicating cursor.

                            </p>
                        </font>
                    </div>
                </div>

                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin7.jpg" alt="Take Action for complain">
                    </div>
                    <div class="blog-text">
                        <h2>Take Action for complain</h2>
                        <font>

                            <p>
                                --When you click <strong>Take Action</strong> button. Then , open a Pop_Up window with some processing. As show in figure,You can add complain <strong>Status</strong>, and also <strong>Remarks</strong> about our complain. <br>
                                <strong><font color="red"> Note:</strong> When You submit our remarks on cmplan, A notification E-mail will be sent on user.</font>

                        </p>
                        </font>
                    </div>
                </div>

                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin8.jpg" alt="Panding Complain Dashboard">
                    </div>
                    <div class="blog-text">
                        <h2>Panding Complain Dashboard</h2>
                        <font>

                            <p>
                                --When you clik on <strong>Pending Complain</strong>. Then you show two option as shown in figure on top. You can take action again , If our complain was processed, then you can close complain by using <strong>View details</strong> Option and follow same procedure on top.
                            </p>
                        </font>
                    </div>
                </div>

                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin9.jpg" alt="Closed Complain Dashboard">
                    </div>
                    <div class="blog-text">

                        <h2>Closed Complain Dashboard</h2>
                        <font>

                            <p><strong>Closed Complain</strong>, dashboard show how many complaint closed after porcessing.
                            </p>
                        </font>
                    </div>
                </div>

                 <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Application.jpg" alt="Closed Complain Dashboard">
                    </div>
                    <div class="blog-text">

                        <h2>Application Complain Section</h2>
                        <font>

                            <p><strong>Application Section</strong>, Here Same process as Hardware Complain Section.
                            </p>
                        </font>
                    </div>
                </div>



                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin15.jpg" alt="Add new user">
                    </div>
                    <div class="blog-text">
                        <h2>Add New User</h2>
                        <font>
                            <p>
                                --By using this window you can create new user.
                            </p>
                        </font>
                    </div>
                </div>

                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin556.jpg" alt="Add new user">
                    </div>
                    <div class="blog-text">
                        <h2>Add New User</h2>
                        <font>
                            <p>
                                --Here you have to put some comon information about user then click Submit button. If you put information correctly then you will see this message: <strong>"Registration successfull. Now You can login !"</strong>

                            </p>
                        </font>
                    </div>
                </div>


                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin10.jpg" alt="Manage User">
                    </div>
                    <div class="blog-text">
                        <h2>Manage User</h2>
                        <font>
                            <p>
                                --By using this window you can see details about users, That means number of user and others information.
                            </p>
                        </font>
                    </div>
                </div>


                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin61.jpg" alt="Manage User">
                    </div>
                    <div class="blog-text">
                        <h2>View User</h2>
                        <font>
                            <p>
                                --By using this window you can see details about users, That means number of user and others information.
                            </p>
                        </font>
                    </div>
                </div>

                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin62.jpg" alt="Manage User">
                    </div>
                    <div class="blog-text">
                        <h2>Edit User</h2>
                        <font>
                            <p>
                                --By using this window you can see details about users, That means number of user and others information.
                            </p>
                        </font>
                    </div>
                </div>

                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin63.jpg" alt="Manage User">
                    </div>
                    <div class="blog-text">
                        <h2>Delete User</h2>
                        <font>
                            <p>
                                --By using this window you can see details about users, That means number of user and others information.
                            </p>
                        </font>
                    </div>
                </div>

               



                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/delivery.jpg" alt="Sub Category">
                    </div>
                    <div class="blog-text">
                        <h2>
                            <font>Delivery Report</font>
                        </h2>
                        <font>
                            <p>
                                --Here we have All Delivery Report : <br>
                                Which and when prodect delivery by Administration.

                            </p>
                    </div>
                </div>


                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/Admin14.jpg" alt="User Login Log">
                    </div>
                    <div class="blog-text">
                        <h2>
                            <font color="">User Login Log</font>
                        </h2>
                        <font>
                            <p>
                                --Here we have four option Frist one is : <br>
                                <strong>"E-mail"</strong> <br>
                                <strong>"IP"</strong> <br>
                                <strong>"Login"</strong> <br>
                                <strong>"Logout"</strong> <br>
                                <strong>"Status"</strong> <br>, By using this window you can see all these information with full details. <br> And also search specific user information very easily by using search option.



                            </p>
                    </div>
                </div>





                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="../com_files/img_Admin/logout.jpg" alt="">
                    </div>
                    <div class="blog-text">
                        <h2>Log Out</h2>
                        <font>
                            <p>
                                ---By using this button user can sign out with <strong>session destroy</strong>.And user will go back to home page.
                            </p>
                        </font>
                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- /Blog -->




    </div>
    <!--/.container-->
    </div>
    <!--/.wrapper-->

    <div id="back-to-top"></div>

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