<?php
session_start();
include('../Admin/include/config.php');
if(strlen($_SESSION['applogin'])==0)
	{	
header('location:../login');
}
else{
date_default_timezone_set('Asia/Dhaka');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


$query2="SELECT `subcategory`,COUNT(*) as number FROM tblcomplaints WHERE `cat_dep` = 'Application' GROUP BY `subcategory`";
$result2 = mysqli_query($con, $query2);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Application|CPB|Dashboard</title>
        <link rel="icon" type="img/png" href="../img/logo.png" />
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
         <!-- <script src="scripts/chart.js"></script> -->
         <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->

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
                                    <h3>Graphical Chart</h3>
                                </div>
                                <div class="module-body">

                    <div id="Application" style="width: 850px; height: 470px;"></div>  



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
        <script src="scripts/chart.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(Hardware);  
           function Hardware()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['subcategory', 'Number'],  
                          <?php  
                          while($row2 = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row2["subcategory"]."', ".$row2["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title:'Percentage of Application complain type',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('Application'));  
                chart.draw(data, options);  
           }   
            
        </script>
    </body>
    <?php 
    
}