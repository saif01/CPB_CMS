<?php session_start();
error_reporting(0);
include('../Admin/include/config.php');

//$_comid=$_GET['userId'];

$_comid=$_GET['cid'];
$_sql="SELECT branch FROM tblcomplaints INNER JOIN users ON tblcomplaints.userId = users.id WHERE complaintNumber=$_comid limit 1";

$result = mysqli_query($con,$_sql);
$value = $result->fetch_assoc();




if(strlen($_SESSION['userlogin'])==0)
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




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>CMS|CPB|Complaint Details</title>
    <link rel="icon" type="img/png" href="../img/logo.png" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <!--File conversion -->
    <link rel="stylesheet" type="text/javascript" href="saif/tableExport.js ">
    <link rel="stylesheet" type="text/javascript" href="saif/jquery.base64.js ">

    <!--For PDF -->
    <link rel="stylesheet" type="text/javascript" href="saif/jspdf/jspdf.js ">
    <link rel="stylesheet" type="text/javascript" href="saif/jspdf/libs/base64.js ">
    <link rel="stylesheet" type="text/javascript" href="saif/jspdf/libs/sprintf.js ">

    <script type="text/javascript">

        function printlayer(layer) {
            var generator = window.open(",'name,");
            var layertext = document.getElementById(layer);
            generator.document.write(layertext.innerHTML.replace("Print Me"));
            generator.document.close();
            generator.Print();
            generator.close();
        }
		
    </script>


</head>

<body>


    <section id="container">
        <?php include('includes/header.php');?>
        <?php include('includes/sidebar.php');?>
        <section id="main-content">
            <section class="wrapper site-min-height">
                <h3>Complain Details</h3>

                <!-- Print Section-->
                <!--h3>
                    <a href="#" id="Print" onclick="javascript:printlayer('div-id-saif')"> <button class="btn btn-primary"><i class="fa fa-print"></i> Report Print</button> </a>
                </h3>
                <div class="container" id="div-id-saif">
                    <h3><i class="fa fa-angle-right"></i> Complaint Details</h3-->
                    <hr />





                    <?php 


         //$query=mysqli_query($con,"select tblcomplaints.*,category.categoryName as catname from tblcomplaints join category on category.id=tblcomplaints.category where userId='".$_SESSION['id']."' and complaintNumber='".$_GET['cid']."'");
        $query=mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `complaintNumber`='".$_GET['cid']."'");


        while($row=mysqli_fetch_array($query))
        {?>    
                
                    <div class="row mt">
                        <label class="col-sm-2 col-sm-2 control-label"><b><i class="  fa fa-key"></i> Complaint Number </b></label>

                        <div class="col-sm-4">
                            <p>
                                <?php echo htmlentities($row['complaintNumber']);?>
                            </p>
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-tag"></i> Reg. Date :</b></label>

                        <div class="col-sm-4">
                            <p>
                                <?php echo htmlentities($row['regDate']);?>
                            </p>
                        </div>
                    </div>


                    <div class="row mt">
                        <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-folder-open"></i> Category :</b></label>

                        <div class="col-sm-4">
                            <p>
                                <?php echo htmlentities($row['cat_dep']);?>
                            </p>
                        </div>

                        <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-folder-open-o"></i> Sub Category :</b> </label>

                        <div class="col-sm-4">
                            <p>
                                <?php echo htmlentities($row['subcategory']);?>
                            </p>
                        </div>
                    </div>



                    <div class="row mt">
                        <label class="col-sm-2 col-sm-2 control-label"><b><i class="  fa fa-random"></i> Complaint For :</b></label>

                        <div class="col-sm-4">
                            <p>
                                <?php echo htmlentities($row['complaintType']);?>
                            </p>
                        </div>

                        <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-home"></i> Complain From:</b></label>

                        <div class="col-sm-4">
                            <p>
                                <?php print_r($value['branch']); ?>
                            </p>
                        </div>
                    </div>





                    <div class="row mt">
                        <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-laptop"></i> Model & Serial :</b>
              </label>
                        <div class="col-sm-4">
                            <p>
                                <?php echo htmlentities($row['noc']);?>
                            </p>
                        </div>
                        <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-briefcase"></i> File :</b></label>
                        <div class="col-sm-4">
                            <p>
                                <?php $cfile=$row['complaintFile'];
                      if($cfile=="" || $cfile=="NULL")
                          {
                            echo htmlentities("File NA");
                          }
                      else
                        { ?>
                                <a href="../complaintdocs/<?php echo htmlentities($row['complaintFile']);?>" target='_blank'> View File</a>
                                <?php } ?>

                            </p>
                        </div>

                    </div>

                    <div class="row mt">
                        <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-laptop"></i>Attached Accesorios</b>
              </label>
                        <div class="col-sm-4">
                            <p>
                                <?php echo htmlentities($row['tools']);?>
                            </p>
                        </div>

                    </div>

                    <div class="row mt">




                        <label class="col-sm-2 col-sm-2 control-label"><b><i class="fa fa-thumb-tack"></i> Complaint Details : </label>
                        <div class="col-sm-10">
                            <p>
                                <?php echo htmlentities($row['complaintDetails']);?>
                            </p>
                        </div>

                    </div>






                </div>

                </div>

                <?php $ret=mysqli_query($con,"select complaintremark.remark as remark,complaintremark.status as sstatus,complaintremark.remarkDate as rdate from complaintremark join tblcomplaints on tblcomplaints.complaintNumber=complaintremark.complaintNumber where complaintremark.complaintNumber='".$_GET['cid']."'");
            while($rw=mysql_fetch_array($ret))
            {
            ?>
                <div class="row mt">

                    <label class="col-sm-2 col-sm-2 control-label"><b>Remark:</b></label>
                    <div class="col-sm-10">
                        <?php echo  htmlentities($rw['remark']); ?>&nbsp;&nbsp; <b>Remark Date: <?php echo  htmlentities($rw['rdate']); ?></b>
                    </div>
                </div>
                <div class="row mt">

                    <label class="col-sm-2 col-sm-2 control-label"><b>Status:</b></label>
                    <div class="col-sm-10">
                        <?php echo  htmlentities($rw['sstatus']); ?>
                    </div>
                </div>

        <?php } ?>

                <div class="row mt">

                    <label class="col-sm-2 col-sm-2 control-label"><b>Final Status :</b></label>
                    <div class="col-sm-4">
                        <p style="color:red">
            <?php 
            if($row['status']=="NULL" || $row['status']=="" )
                {
                    echo "Not Process yet";
                } 
            else
                {
                    echo htmlentities($row['status']);
                }?>
                        </p>
                    </div>
                </div>


                <?php } ?>
                
                
            
            </section>

    <!--div >
               <h3>
                <a href="#" id="Print2" onclick="javascript:printlayer('div-id-saif')"> <button class="btn btn-primary"><i class="fa fa-print"></i> Report Pdf</button> </a>
                </h3>
                <button type="button" id="Print2" class="btn btn-primary" > Print as pdf  </button>
            </div-->

            <! --/wrapper -->
        </section>
        <!-- /MAIN CONTENT -->
        <?php include('includes/footer.php');?>
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

    <script>
        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });
    </script>

</body>

</html>
<?php } ?>