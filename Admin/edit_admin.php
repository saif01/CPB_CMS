<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['mainAdmin'])==0)
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

    <?php $_user_id = $_GET['uid']; ?>

    <?php


  if(isset($_POST['submit']))
  {
       
  $fullName=$_POST['fullName'];
  
  $category=$_POST['category'];
  
         
      echo "-------------Updated Information-----------". "</br>"."</br>";
      echo "Full Name -----:   ".$fullName. "</br>";
      echo "Category ------:   ". $category. "</br>";
      



      $query=mysqli_query($con,"UPDATE `users` SET `fullName`='$fullName',`category`='$category' WHERE `id` = $_user_id");
      if($query)
        {
        $successmsg="Profile Successfully !!";
        }
        else
        {
        $errormsg="Profile not updated !!";
        }
  }

?>

        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>Admin|CPB|Edit Admin</title>
            <link href="style.css" rel="stylesheet" type="text/css">
            <link href="anuj.css" rel="stylesheet" type="text/css">
            <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        </head>

        <body>

            <div style="margin-left:50px;">
                <form name="updateticket" id="updateticket" method="post">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <?php 

                $ret1=mysqli_query($con,"SELECT * FROM `users` WHERE id='".$_GET['uid']."'");
                while($row=mysqli_fetch_array($ret1))
                {
            ?>


                        <td colspan="2"><b><i class="icon-user"></i> <?php echo $row['fullName'];?>'s profile You can Edit :</b></td>

                        <tr height="50">

                            <td><label class="col-sm-2 col-sm-2 control-label"><i class="icon-pencil"></i> Full Name</label></td>
                            <td><input type="text" name="fullName" required="required" value="<?php echo htmlentities($row['fullName']);?>" class="form-control"> </td>
                        </tr>

                         <tr height="50">

                            <td><label class="col-sm-2 col-sm-2 control-label"><i class="icon-pencil"></i> Full Name</label></td>
                            <td><input type="text" name="nam" required="required" value="<?php echo htmlentities($row['userEmail']);?>" class="form-control" readonly> </td>
                        </tr>

                        <tr height="50">



                            <td> <label class="control-label" for="basicinput"><i class="icon-pencil"></i>Category Name</label></td>
                            <td> <select name="category" id="" class="form-control" required>
                                           <option value="">Select Problem Category</option>
                                           <option value="Hardware">Hardware</option>
                                           <option value="Application">Application</option>
                                           <option value="Admin">Admin</option>
                                                           
                                                            
                                                        </select></td>

                        </tr>



                        <tr height="50">
                            <!--div class="col-sm-10" style="padding-left:5% "-->
                            <td> </td>
                            <td> <button type="submit" name="submit" class="btn btn-primary"><i class="icon-ok"></i> Submit</button></td>
                            <td colspan="2"><i class="icon-off"></i>
                                <input name="Submit2" type="submit" class="txtbox6" value="Close this window" onClick="return f2();" style="cursor: pointer;" /></td>


                        </tr>


                        <?php } 

          
              ?>

                    </table>
                </form>
            </div>



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

        </html>

        <?php } ?>