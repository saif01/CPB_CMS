<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['mainAdmin'])==0)
	{	
	header('location:../login');
	}
else{
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
        <title>Admin|C.P.B|Admin Panel</title>
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
                popUpWin = open(URLStr, 'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width=' + 600 + ',height=' + 600 + ',left=' + left + ', top=' + top + ',screenX=' + left + ',screenY=' + top + '');
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


                                    <table  cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="98%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>ID</th>
                                                <th>Category </th>
                                                <th>Action</th>                    
                                                <th>Action</th>
                                                <th>Action</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>

             <?php
                     
                    $query=mysqli_query($con,"SELECT * FROM `users` WHERE `section`='Admin' ORDER BY `users`.`id` DESC");

					$cnt=1;
					while($row=mysqli_fetch_array($query))
					{
				    ?>
                                            <tr>
                                                <td>
                                                    <?php echo htmlentities($cnt);?>
                                                </td>
                                                <td >
                                                    <?php echo htmlentities($row['fullName']);?>
                                                </td>

                                                 <td>
                                                    <?php echo htmlentities($row['userEmail']);?>
                                                </td>


                                                <td>
                                                    <?php echo htmlentities($row['category']);?>
                                                </td>
                                                                                         

                                                <td>
                                                    <a href="javascript:void(0);" onClick="popUpWindow('edit_Admin.php?uid=<?php echo htmlentities($row['id']);?>');" title="Edit User Info.">
                                             <button type="button" class="btn btn-info"><i class="icon-user"></i> Edit </button>
                                            </a>
                                                </td>

                                            <td>
                                            <?php if($row['status']==1)
                                             {?>
                                            <a href="disable_enable.php?a_inid=<?php echo htmlentities($row['id']);?>" onclick="return confirm('Are you sure you want to block this ** ID **?');"><button class="btn btn-danger"><i class="icon-ban-circle"> Blocked</i> </button>
                                            <?php } else {?>

                                            <a href="disable_enable.php?a_id=<?php echo htmlentities($row['id']);?>" onclick="return confirm('Are you sure you want to active this ** ID **?');"><button class="btn btn-primary"><i class="icon-ok-sign"> Active </i></button> 
                                            <?php } ?>
                                          
                                            </td>
                                                                                 

                                                 <td>
                                                    <a href="delete _Admin.php?uid=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><button type="button" class="btn btn-danger" ><i class="icon-remove-sign"> Delete</i></button>



                                                </td>

                                                <?php $cnt=$cnt+1; } ?>

                                    </table>                 

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
    <?php } ?>