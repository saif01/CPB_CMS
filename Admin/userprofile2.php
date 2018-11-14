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
      $fname=$_POST['fullname'];
      $contactno=$_POST['contactno'];
      $dept=$_POST['dept'];
      $sub_dept=$_POST['sub_dept'];
      $branch=$_POST['branch'];
      $off_id=$_POST['off_id'];
      $nid=$_POST['nid'];
      $bu_head=$_POST['bu_head'];
         
      echo "-------------Updated Information-----------". "</br>"."</br>";
      echo "Full Name -----:   ".$fname. "</br>";
      echo "Number --------:   ".$contactno. "</br>";
      echo "Department ----:   ".$dept. "</br>";
      echo "Sub_department-:   ".$sub_dept. "</br>";
      echo "Branch --------:   ".$branch. "</br>";
      echo "OfficeID ------:   ".$off_id. "</br>";
      echo "NID -----------:   ".$nid. "</br>";
      echo "B.U.Head ------:   ".$bu_head. "</br>"."</br>";



      $query=mysqli_query($con,"update users set fullName='$fname',contactNo='$contactno',dept='$dept',sub_dept='$sub_dept',branch='$branch',off_id='$off_id',nid='$nid',bu_head='$bu_head' where id = $_user_id");
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
            <title>Admin|CPB|EditUser Profile</title>
            <link href="style.css" rel="stylesheet" type="text/css">
            <link href="anuj.css" rel="stylesheet" type="text/css">
            <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        </head>

        <body>

            <div style="margin-left:50px;">
                <form name="updateticket" id="updateticket" method="post">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <?php 

                $ret1=mysqli_query($con,"select * FROM users where id='".$_GET['uid']."'");
                while($row=mysqli_fetch_array($ret1))
                {
            ?>


                        <td colspan="2"><b><i class="icon-user"></i> <?php echo $row['fullName'];?>'s profile You can Edit :</b></td>

                        <tr height="50">

                            <td><label class="col-sm-2 col-sm-2 control-label"><i class="icon-pencil"></i> Full Name</label></td>
                            <td><input type="text" name="fullname" required="required" value="<?php echo htmlentities($row['fullName']);?>" class="form-control"> </td>
                        </tr>

                        <tr height="50">
                            <td><label class="col-sm-2 col-sm-2 control-label"><i class="icon-arrow-right"></i> Contact</label> </td>
                            <td><input type="text" name="contactno" required="required" value="<?php echo htmlentities($row['contactNo']);?>" class="form-control"></td>
                        </tr>

                        <tr height="50">
                            <td><label class="col-sm-2 col-sm-2 control-label"><i class="icon-th-large"></i> Department</label></td>
                            <td><input type="text" name="dept" required="required" value="<?php echo htmlentities($row['dept']);?>" class="form-control">
                            </td>
                        </tr>

                        <tr height="50">

                            <td><label class="col-sm-2 col-sm-2 control-label"><i class="icon-th"></i> Sub_department</label></td>
                            <td><input type="text" name="sub_dept" required="required" value="<?php echo htmlentities($row['sub_dept']);?>" class="form-control">
                            </td>

                        </tr>

                        <tr height="50">
                            <td> <label class="col-sm-2 col-sm-2 control-label"><i class="icon-home"></i> Branch </label></td>
                            <td><input type="text" name="branch" required="required" value="<?php echo htmlentities($row['branch']);?>" class="form-control"></td>

                        </tr>


                        <tr height="50">

                            <td> <label class="col-sm-2 col-sm-2 control-label"><i class="icon-tag"></i> OfficeID</label></td>
                            <td><input type="text" name="off_id" maxlength="10" required="required" value="<?php echo htmlentities($row['off_id']);?>" class="form-control"></td>
                        </tr>


                        <tr height="50">
                            <td> <label class="col-sm-2 col-sm-2 control-label"><i class="icon-tag"></i> NID </label></td>
                            <td><input type="text" name="nid" required="required" value="<?php echo htmlentities($row['nid']);?>" class="form-control"></td>

                        </tr>


                        <tr height="50">
                            <td> <label class="col-sm-2 col-sm-2 control-label"><i class="icon-home"></i> B.U. Head </label></td>
                            <td><input type="text" name="bu_head" required="required" value="<?php echo htmlentities($row['bu_head']);?>" class="form-control"></td>

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