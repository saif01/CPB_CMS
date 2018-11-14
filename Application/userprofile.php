<?php
session_start();
include('../Admin/include/config.php');
if(strlen($_SESSION['applogin'])==0)
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


    <?php
if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from users where id = '".$_GET['uid']."'");
                  $_SESSION['delmsg']="Category deleted !!";
      }
?>


        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>Application|CPB|User Profile</title>
            <link rel="icon" type="img/png" href="../img/logo.png" />
            <link href="style.css" rel="stylesheet" type="text/css" />
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


                        <tr>
                            <td colspan="2"><b><i class="icon-user"></i>  <?php echo $row['fullName'];?>'s profile</b></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr height="40">
                            <td><b><i class="icon-eye-open"></i>  Reg Date-------------:</b></td>
                            <td>
                                <?php echo htmlentities($row['regDate']); ?>
                            </td>
                        </tr>

                        <tr height="40">
                            <td><b><i class="icon-envelope"></i>  User Email----------:</b></td>
                            <td>
                                <?php echo htmlentities($row['userEmail']); ?>
                            </td>
                        </tr>

                        <tr height="40">
                            <td><b><i class=" icon-arrow-right"></i>User Contact no-----:</b></td>
                            <td>
                                <?php echo htmlentities($row['contactNo']); ?>
                            </td>
                        </tr>



                        <tr height="40">
                            <td><b><i class="icon-th-large"></i>  Department----------:</b></td>
                            <td>
                                <?php echo htmlentities($row['dept']); ?>
                            </td>
                        </tr>



                        <tr height="40">
                            <td><b><i class="icon-th"></i>  Sub_department----:</b></td>
                            <td>
                                <?php echo htmlentities($row['sub_dept']); ?>
                            </td>
                        </tr>


                        <tr height="40">
                            <td><b><i class="icon-home"></i>  Branch----------------:</b></td>
                            <td>
                                <?php echo htmlentities($row['branch']); ?>
                            </td>
                        </tr>


                        <tr height="40">
                            <td><b><i class="icon-tag"></i>  OfficeID--------------:</b></td>
                            <td>
                                <?php echo htmlentities($row['off_id']); ?>
                            </td>
                        </tr>

                        <tr height="40">
                            <td><b><i class="icon-tag"></i>  National ID-----------:</b></td>
                            <td>
                                <?php echo htmlentities($row['nid']); ?>
                            </td>
                        </tr>

                        <tr height="40">
                            <td><b><i class="icon-tag"></i>  B.U. Head--------------:</b></td>
                            <td>
                                <?php echo htmlentities($row['bu_head']); ?>
                            </td>
                        </tr>


                        <tr height="40">
                            <td><b><i class="icon-circle-arrow-up"></i> Last Updation-------:</b></td>
                            <td>
                                <?php echo htmlentities($row['updationDate']); ?>
                            </td>
                        </tr>
                        <tr height="40">
                            <td><b><i class="icon-bookmark">  </i>   Status------------------:</b></td>
                            <td>
                                <?php if($row['status']==1)
                    { echo "Active"; } 
                    else
                    {
                      echo "Block";
                    }
                    ?>
                            </td>
                        </tr>


                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="4"><i class="icon-off"></i>
                                <input name="Submit2" type="submit" class="txtbox4" value="Close window " onClick="return f2();" style="cursor: pointer;" />
                            </td>

                            <td colspan="4"> <i class="icon-print"></i>
                                <input name="Submit2" type="submit" class="txtbox4" value="Print window" onClick="return f3();" style="cursor: pointer;" />
                            </td>



                        </tr>
                        <?php } 

    ?>


                    </table>
                </form>
            </div>

        </body>

        </html>

        <?php } ?>