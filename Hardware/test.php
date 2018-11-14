<?php
session_start();
include('../Admin/include/config.php');

	date_default_timezone_set('Asia/Dhaka');// change according timezone
	$currentTime = date( 'd-m-Y h:i:s A', time () );



if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from users where id ='".$_GET['uid']."'");
                  $_SESSION['delmsg']="Category deleted !!";
		  }

?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hardware|CPB|Manage Users</title>
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
                                    <h3>Delivery Report</h3>
                                    
                                </div>
                                <div  class="module-body table">


				<form class="form-horizontal row-fluid" action="report_show.php" method="post" >

					<div class="control-group">
					    <label class="control-label" for="basicinput"> Start Date : </label>
					    <div class="controls">
					        <input type="date" placeholder="Enter category Name"  name="startDate" class="span10 tip" required>
					    </div>
					</div>

					<div class="control-group">
					    <label class="control-label" for="basicinput"> End Date : </label>
					    <div class="controls">
					        <input type="date" placeholder="Enter category Name"  name="endDate" class="span10 tip" required>
					    </div>
					</div>


				  
				  <div class="control-group">
                      <div class="controls">
<!-- <a href="javascript:void(0);" onClick="popUpWindow('updatecomplaint2.php?cid=<?php echo htmlentities($row['complaintNumber']);?>');" title="Update order ">
                                             <button type="button" class="btn btn-primary"><i class="icon-edit"></i> Take Action</button>
                                            </a> -->

<a href="http://localhost/cms/hardware/report_show.php" target="_blank">
                        <button type="submit" name="submit" class="btn btn-lg span10 btn-danger"><i class="icon-ok-sign"></i> Create</button>
                      </div>
                    </div>
				</form>

                                </div>
                            </div>



                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->

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
    