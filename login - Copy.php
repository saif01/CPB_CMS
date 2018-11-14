<?php
session_start();
error_reporting(0);
include("Admin/include/config.php");
require('users/saif/UserInfo.php');
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

$ret=mysqli_query($con,"SELECT * FROM users WHERE userEmail='$username' and password='$password'");
   
$num=mysqli_fetch_array($ret);
if($num>0)
{   

    $ret= mysqli_query($con,"SELECT * FROM users WHERE `userEmail`='$username'");
    while($row=mysqli_fetch_array($ret))
                {   

                    $field=$row[category];
                    $st=$row['status'];

                    if ($field =='user' && $st==1) 
                    {  
                    
                        $_SESSION['alogin']=$_POST['username'];
                        $_SESSION['id']=$num['id'];
                        $ip= UserInfo::get_ip();
                        $os= UserInfo::get_os();
                        $browser= UserInfo::get_browser();
                        //$device= UserInfo::get_device();
                        $device= gethostname();
                        $status=1;
                        

                         
                         $log=mysqli_query($con,"INSERT INTO `user_info`(`uid`, `username`, `userip`, `useros`, `userbrowser`, `userdevice`, `status`) VALUES ('".$_SESSION['id']."','".$_SESSION['alogin']."','$ip','$os','$browser','$device','$status')");

                         header("Location: users");
                        exit();


                    }

                    elseif ($field =='Hardware' && $st==1) 
                    {
                      
                        $_SESSION['Admin'] = $_POST['username'];
                        $_SESSION['alogin']=$_POST['username'];
                        $_SESSION['id']=$num['id'];
                        header("Location: Hardware"); /* Redirect browser */
                        $ip= UserInfo::get_ip();
                        $os= UserInfo::get_os();
                        $browser= UserInfo::get_browser();
                        $device= gethostname();
                        $status=1;                       
                        $log=mysqli_query($con,"INSERT INTO `user_info`(`uid`, `username`, `userip`, `useros`, `userbrowser`, `userdevice`, `status`) VALUES ('".$_SESSION['id']."','".$_SESSION['alogin']."','$ip','$os','$browser','$device','$status')");

                      exit();
                      
                    }


                    elseif ($field =='Application' && $st==1) 
                    {
                      
                        $_SESSION['Admin'] = $_POST['username'];
                        $_SESSION['alogin']=$_POST['username'];
                        $_SESSION['id']=$num['id'];
                        header("Location: Application"); /* Redirect browser */

                        $ip= UserInfo::get_ip();
                        $os= UserInfo::get_os();
                        $browser= UserInfo::get_browser();
                        $device= gethostname();
                        $status=1;

                         
                         $log=mysqli_query($con,"INSERT INTO `user_info`(`uid`, `username`, `userip`, `useros`, `userbrowser`, `userdevice`, `status`) VALUES ('".$_SESSION['id']."','".$_SESSION['alogin']."','$ip','$os','$browser','$device','$status')");
                        exit();

                      
                    }

                    elseif ($field=='Admin' && $st==1) 
                    {
                       
                        $_SESSION['Admin'] = $_POST['username'];
                        $_SESSION['alogin']=$_POST['username'];
                        $_SESSION['id']=$num['id'];
                        $host=$_SERVER['HTTP_HOST'];
                        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
                        header("location: Admin");

                        $ip= UserInfo::get_ip();
                        $os= UserInfo::get_os();
                        $browser= UserInfo::get_browser();
                        $device= gethostname();
                        $status=1;
                        
                         $log=mysqli_query($con,"INSERT INTO `user_info`(`uid`, `username`, `userip`, `useros`, `userbrowser`, `userdevice`, `status`) VALUES ('".$_SESSION['id']."','".$_SESSION['alogin']."','$ip','$os','$browser','$device','$status')");
                        exit();
                    }

                    elseif ($field =='user' && $st==0)
                    {   

                        $_SESSION['alogin']=$_POST['username'];
                        $_SESSION['id']=$num['id'];
                         $ip= UserInfo::get_ip();
                         $os= UserInfo::get_os();
                         $browser= UserInfo::get_browser();
                         $device= gethostname();
                         $status=0;                         
                         $log=mysqli_query($con,"INSERT INTO `user_info`(`uid`, `username`, `userip`, `useros`, `userbrowser`, `userdevice`, `status`) VALUES ('".$_SESSION['id']."','".$_SESSION['alogin']."','$ip','$os','$browser','$device','$status')");

                        echo "<script>
                        alert('Your Account Has been blocked .Please contact Admin  !!!');
                        window.open('login.php','_self'); </script>";

                    }

                    elseif ($field =='Hardware' && $st==0)
                    {
                        echo "<script>
                        alert('Your Account Has been blocked .Please contact Admin  !!!');
                        window.open('login.php','_self'); </script>";

                    }

                    elseif ($field =='Application' && $st==0)
                    {
                        echo "<script>
                        alert('Your Account Has been blocked .Please contact Admin  !!!');
                        window.open('login.php','_self'); </script>";

                    }
             }
        }

    else
    {
        $_SESSION['errmsg']="Invalid username or password";       
        $_SESSION['alogin']=$_POST['username'];
        $_SESSION['id']=$num['id'];
         $ip= UserInfo::get_ip();
         $os= UserInfo::get_os();
         $browser= UserInfo::get_browser();
         $device= UserInfo::get_device();
         $status=0;                         
         $log=mysqli_query($con,"INSERT INTO `user_info`(`uid`, `username`, `userip`, `useros`, `userbrowser`, `userdevice`, `status`) VALUES ('".$_SESSION['id']."','".$_SESSION['alogin']."','$ip','$os','$browser','$device','$status')");

         header("location: login.php");
        exit();
       
    }

   



}


?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CMS|CPB|Admin login</title>
        <link rel="icon" type="img/png" href="../img/logo.png" />
       <link type="text/css" href="Admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="Admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="Admin/css/theme.css" rel="stylesheet">
        <link type="text/css" href="Admin/css/saif.css" rel="stylesheet">
        <link type="text/css" href="Admin/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    </head>

    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>

                    <a class="brand" href="login.php">
                    CMS|CPB|login
                </a>

                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        <ul class="nav pull-right">

                            <li><a href="index.html">
                        Back to Portal
                        
                        </a></li>




                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->



        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="module module-login span4 offset4">
                        <form class="form-vertical" method="post">
                            <div class="module-head">
                                <h1>Sign In</h1>
                            </div>
                            <span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
                            <div class="module-body">
                                <div class="control-group">
                                    <div class="controls row-fluid">

                                        <input class="span12" type="text" id="inputEmail" name="username" placeholder="Username">

                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls row-fluid">
                                        <input class="span12" type="password" id="inputPassword" name="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="module-foot">
                                <div class="control-group">
                                    <div class="controls clearfix">
                                        <button type="submit" class="btn btn-primary pull-right" name="submit">Login</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/.wrapper-->

        <div class="footer">
            <div class="container">


                <b class="copyright">&copy;CPB.CMS </b> All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>