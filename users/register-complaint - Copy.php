<?php
session_start();
error_reporting(0);
include('../Admin/include/config.php');
if(strlen($_SESSION['userlogin'])==0)
      { 
    header('location:../login');
      }
else{

        if(isset($_POST['submit']))
        {
            $uid=$_SESSION['id'];
            $category=$_POST['category'];
            $subcat=$_POST['subcategory'];
            //$complaintype=$_POST['complaintype'];

            $noc=$_POST['noc'];
            $complaintdetials=$_POST['complaindetails'];
            $compfile=$_FILES["compfile"]["name"];       
            $toolsarr=$_POST['tools'];
            $tools= implode(",",$toolsarr);

            //for Applicationlication part

            $sof_name=$_POST['slct1'];
            $sof_prob=$_POST['slct2'];

        
         if($category=='Hardware')

         {

            $complaintype="Md.Moniruzzaman (Shadhin)";

        move_uploaded_file($_FILES["compfile"]["tmp_name"],"../complaintdocs/".$_FILES["compfile"]["name"]);
        $query=mysqli_query($con,"insert into tblcomplaints(userId,category,subcategory,complaintType,cat_dep,noc,sub_prob,tools,complaintDetails,complaintFile) values('$uid','$category','$subcat','$complaintype','$category','$noc','','$tools','$complaintdetials','$compfile')");

        // code for show complaint number
        $sql=mysqli_query($con,"select complaintNumber from tblcomplaints  order by complaintNumber desc limit 1");

        // $sql=mysqli_query($con,"select userEmail from users order by complaintNumber desc limit 1");
        while($row=mysqli_fetch_array($sql))
            {
             $cmpn=$row['complaintNumber'];
             //$cmpn=$row['userEmail'];
            }
        $complainno=$cmpn;

        echo '<script> alert("Your complain has been successfully filled and your complaintno is  "+"'.$complainno.'")</script>';

        
        
        $to = "shadhin@cpbangladesh.com, it.support@cpbangladesh.com";        
	// $to = "saifulislamw60@gmail.com";
                // Multiple recipients
                //$to = 'johny@example.com, sally@example.com'; // note the comma
                
                //$to =$_POST['complaintype'];
                // $to = "shadhin@cpbangladesh.com"; // this is your Email address
                
               
                $subject="Hardware Complain no: " . $complainno ."";
                $message=" <html>
                                <font size='5' color='green'>This is a Hardware Problem.</font><br><br><hr>
                                <font size='4' color='blue'>Take action, Please. </font><br>
                                <font size='3' color='#307221'>Problem in :   <b>**" . $subcat ."**</b>.</font><hr><br><br><br>
                                
                               <b> Support Team: </b>
                               <font size='' color='green'>
                                Md. Moniruzzaman <br>
                                Contract: 01787692529 <br>
                                Md. Polash Mahamud <br>
                                Contract: 01787692530 <br>
                                Holding No: E-236, Ward No: 007, Chandra, Kaliyakor, Gazipur <br>
                                </font>
                                <font size='2' color=''> Thank you, Sir.</font><br>

                          </html> ";
                        
                
                //$header="From:cpbangladesh.com \r\n";
                //$header .="MIME-Version: 1.0 \r\n";
                //$header .="Content-type: text/html;charset=UTF-8 \r\n";
                //$header .="CC: somebodyelse@example.com";
                
                        // To send HTML mail, the Content-type header must be set
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                
                        // Additional headers
                
                 $headers[] = 'From: cpbangladesh.com';
                //$headers[] = 'Cc: birthdayarchive@example.com';
                //$headers[] = 'Bcc: birthdaycheck@example.com';
        
                if(mail($to,$subject, $message, implode("\r\n", $headers)))


        ?>
    <script>
        window.open('register-complaint.php', '_self');
    </script>
    <?php

         }

            elseif($category=='Application')

         {

            $complaintype="Md.Abul Kalam Azad";

             move_uploaded_file($_FILES["compfile"]["tmp_name"],"../complaintdocs/".$_FILES["compfile"]["name"]);

        $query=mysqli_query($con,"insert into tblcomplaints(userId,category,subcategory,complaintType,cat_dep,noc,sub_prob,tools,complaintDetails,complaintFile) values('$uid','$category',' $sof_name','$complaintype','$category','','$sof_prob','','$complaintdetials','$compfile')");

        // code for show complaint number
        $sql=mysqli_query($con,"select complaintNumber from tblcomplaints  order by complaintNumber desc limit 1");

        // $sql=mysqli_query($con,"select userEmail from users order by complaintNumber desc limit 1");
        while($row=mysqli_fetch_array($sql))
            {
             $cmpn=$row['complaintNumber'];
             //$cmpn=$row['userEmail'];
            }
        $complainno=$cmpn;
        echo '<script> alert("Your complain has been successfully filled and your complaintno is  "+"'.$complainno.'")</script>';


             
            $to = "kalam@cpbangladesh.com";

            //$to = "saifulislamw60@gmail.com";
                //$to =$_POST['complaintype'];
              //$to = "kalam@cpbangladesh.com"; // this is your Email address
                //$from = "C.P.Bangladesh@gmail.com "; // this is the sender's Email address
               
                 $subject="Application Complain no: " . $complainno ."";
                $message=" <html>
                                <font size='5' color='green'>This is a Application Problems.</font><br><br><hr>
                                <font size='4' color='blue'>Take action, Please. </font><br>
                                <font size='3' color='#307221'>Problem in : **<b> " .$sof_prob  ." ** of **" . $sof_name ." **. </b></font> <hr><br><br><br>
                                
                               <b> Support Team: </b>
                               <font size='' color='green'>
                                Md.Abul Kalam Azad  <br>
                                Contract: 01766668845 <br>
                                
                                Holding No: E-236, Ward No: 007, Chandra, Kaliyakor, Gazipur <br>
                                </font>
                                <font size='2' color=''> Thank you, Sir.</font><br>

                          </html> ";
                        
                
                //$header="From:cpbangladesh.com \r\n";
                //$header .="MIME-Version: 1.0 \r\n";
                //$header .="Content-type: text/html;charset=UTF-8 \r\n";
                //$header .="CC: somebodyelse@example.com";
                
                        // To send HTML mail, the Content-type header must be set
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                
                        // Additional headers
                
                 $headers[] = 'From: cpbangladesh.com';
                //$headers[] = 'Cc: birthdayarchive@example.com';
                //$headers[] = 'Bcc: birthdaycheck@example.com';
        
                if(mail($to,$subject, $message, implode("\r\n", $headers)))

           

        ?>
        <script>
            window.open('register-complaint.php', '_self');
        </script>
        <?php
         }
        
       
     } 

?>


            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="">
                <meta name="author" content="Dashboard">
                <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

                <title>CMS | Support for IT Solution</title>
                <link rel="icon" type="img/png" href="../img/logo.png" />

                <!-- Bootstrap core CSS -->
                <link href="assets/css/bootstrap.css" rel="stylesheet">
                <!--external css-->
                <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
                <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
                <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
                <link href="assets/css/style.css" rel="stylesheet">
                <link href="assets/css/style-responsive.css" rel="stylesheet">
                <!-- Test Editor add -->
                <!--script src="//cdn.ckeditor.com/4.10.0/basic/ckeditor.js"></script-->
                <!--script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script-->


                <script>
                    function show() {
                        var selectBox = document.getElementById('category');
                        var userInput = selectBox.options[selectBox.selectedIndex].value;
                        if (userInput == 'Hardware') {
                            document.getElementById('Hardwared').style.display = 'block';
                            document.getElementById('Application').style.display = 'none';


                        } else if (userInput == 'Application') {
                            document.getElementById('Application').style.display = 'block';
                            document.getElementById('Hardwared').style.display = 'none';


                        } else if (userInput == 'inf') {
                            //document.getElementById('inf').style.display = 'block';
                             document.getElementById('Hardwared').style.display = 'none';
                              document.getElementById('Application').style.display = 'none';


                        } else {
                            document.getElementById('Hardwared').style.display = 'none';
                            document.getElementById('Application').style.display = 'none';
                            document.getElementById('inf').style.display = 'none';


                        }

                        return false;


                    }



                    function populate(s1, s2) {
                        var s1 = document.getElementById(s1);
                        var s2 = document.getElementById(s2);
                        s2.innerHTML = "";
                        if (s1.value == "Smart_Soft") {
                            var optionArray = ["|","Payment module|Payment module", "Receipt module|Receipt module", "DC (logistic) module|DC (logistic) module", "Stock module|Stock module ", "Generate |Generate ", "Journal|Journal", "Interface|Interface"];
                        } else if (s1.value == "Win_Feed") {
                            var optionArray = ["|","Queue module|Queue module", "Weight module|Weight module", "Purchases module (QC)|Purchases module (QC)", "Purchases module (Non QC)|Purchases module (Non QC)", "Credit control|Credit control", "Accounting stock|Accounting stock", "Accounting stock|Accounting stock", "Spare parts|Spare parts", "Sales module|Sales module", "Finish goods module|Finish goods module", "Cost accounting module|Cost accounting module", "R.M module|R.M module", "NCR-Car module|NCR-Car module", "Plan automatic module|Plan automatic module", "RM-Quota management|RM-Quota management"];
                        } else if (s1.value == "Win_farm") {
                            var optionArray = ["|","Sales|Sales", "Purchase|Purchase", "Stock management system|Stock management system", "Account setting|Account setting", "Farm setup|Farm setup"];
                        }
                        else if (s1.value == "Smart_I_Lab") {
                            var optionArray = ["|","User access|User access", "Approved result|Approved result", "Report problem|Report problem", "Lab result|Lab result "];
                        }
                        else if (s1.value == "Pay_Roll") {
                            var optionArray = ["|","Employee information|Employee information", "Leave management|Leave Managment", "Attendance|Attendance", "Pay roll|Pay roll", "Tax issue|Tax issue", "Report|Report", "Upload|Upload"];
                        }
                        else if (s1.value == "Cloud_POS") {
                            var optionArray = ["|","Product set up|Product set up", "Promotion set up|Promotion set up", "Stock adjust|Stock adjust", "Day close|Day close", "Report problem|Report problem"];
                        }
                        else if (s1.value == "Shampan_VAT") {
                            var optionArray = ["|", "Product set up|Product set up", "Price set up|Price set up", "Purchase set up|Purchase set up", "Sale set up|Sale set up", "Data generate from smart soft|Data generate from smart soft"];
                        }

                        for (var option in optionArray) {
                            var pair = optionArray[option].split("|");
                            var newOption = document.createElement("option");
                            newOption.value = pair[0];
                            newOption.innerHTML = pair[1];
                            s2.options.add(newOption);
                        }
                    }


                </script>

            </head>

            <body>

                <section id="container">
                    <?php include("includes/header.php");?>
                    <?php include("includes/sidebar.php");?>
                    <section id="main-content">
                        <section class="wrapper">
                            <h3><i class="fa fa-angle-right"></i> Register Complaint</h3>

                            <!-- BASIC FORM ELELEMNTS -->
                            <div class="row mt">
                                <div class="col-lg-12 transStyle">
                                    <div class="form-panel transStyle">


                                        <?php if($successmsg)
                                    
                                    {?>
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <b>Well done!</b>
                                            <?php echo htmlentities($successmsg);?>
                                        </div>
                                        <?php }?>

                                        <?php if($errormsg)
                                    {?>
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <b>Oh snap!</b> </b>
                                            <?php echo htmlentities($errormsg);?>
                                        </div>
                                        <?php }?>
                     <form class="form-horizontal style-form" method="post" name="complaint" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="category" class="col-sm-2 col-sm-2 control-label">Category</label>
                                                <div class="col-sm-8">
                                                    <select name="category" id="category" class="form-control" onChange="return show();" required="">                                                    
                                                        <option value="">Select Category</option>
                                                        <option value="Hardware">Hardware Support</option>
                                                        <option value="Application">Application Support</option>
                                                        <option value="inf">Infrastructure Support</option>
                                                    </select>
                                                </div>

                                            </div>

                         <div id="Hardwared" class="form-group" style="display:none;">

                                                <div class="form-group col-sm-12">
                                                    <label class="col-sm-2 col-sm-2 control-label">Sub Category: </label>
                                                    <div class="col-sm-4">
                                                        <select name="subcategory" id="subcategory" class="form-control" >
                                                            <option value="">Select Problem Category</option>
                                                            <option value="Notebook Computer">Notebook Computer</option>
                                                            <option value="Desktop Computer">Desktop Computer</option>
                                                            <option value="Computer Accessories">Computer Accessories</option>
                                                            <option value="Network Accessories">Network Accessories</option>
                                                            <option value="Handheld & Accessories">Handheld & Accessories</option>
                                                            <option value="AV Accessories">AV Accessories</option>
                                                            <option value="Router,Switching & Hub">Router,Switching & Hub</option>
                                                            <option value="Data storage media">Data storage media</option>
                                                            <option value="Software License">Software License</option>
                                                            <option value="Server and Workstation">Server and Workstation</option>
                                                            <option value="Access point">Access point</option>
                                                            <option value="POS">POS</option>
                                                            <option value="UPS">U.P.S.</option>
                                                            <option value="Monitor">Monitor</option>
                                                            <option value="Printer">Printer</option>
                                                            <option value="Projector">Projector</option>
                                                            <option value="Other Computer Equip">Other Computer Equip</option>
                                                        </select>
                                                    </div>

                                                <label class="col-sm-2 col-sm-2 control-label ">Model & Serial No:</label>
                                                    <div class="col-sm-4">
                                                    <input type="text" name="noc" placeholder=" Model & Serial" value="" class="form-control" >
                                                    </div>
                                                </div>

                                 <div class="form-group col-sm-12">
                                                    <label class="col-sm-2 col-sm-2 control-label" style=""> Accessories Send:
                                                    </label>
                                                        <input type="checkbox" id="tools" name="tools[]" value="Mouse" > Mouse
                                                        <input type="checkbox" id="tools" name="tools[]" value="keybord" > keybord
                                                        <input type="checkbox" id="tools" name="tools[]" value="Power_Cord" > Power Cord
                                                        <input type="checkbox" id="tools" name="tools[]" value="AC_Adeptar" > AC Adeptar
                                                        <input type="checkbox" id="tools" name="tools[]" value="VGA_Cord" > VGA Cord
                                                        <input type="checkbox" id="tools" name="tools[]" value="Usb_Cord" > Usb Cord
                                                        <input type="checkbox" id="tools" name="tools[]" value="Power_Supply" > Power Supply
                                                        <input type="text" name="tools[]" placeholder="Others product that you provide mention here" value=""  class="">
                                                    
                                        </div>


                         </div>


                        <div id="Application" class="form-group col-sm-12 " style="display:none;">
                                <label class="col-sm-2 col-sm-2 control-label ">Software Name </label>
                                    <div class="col-sm-4">
                                            <select id="slct1" name="slct1" class="form-control" onchange="populate(this.id,'slct2')" >
                                              <option value="">Select Software</option>
                                              <option value="Smart_Soft">Smart Soft</option>
                                              <option value="Win_Feed">Win Feed</option>
                                              <option value="Win_farm">Win farm </option>
                                              <option value="Smart_I_Lab">Smart I-Lab</option>
                                              <option value="Pay_Roll">Pay Roll</option>
                                              <option value="Cloud_POS">Cloud POS</option>
                                              <option value="Shampan_VAT">Shampan VAT</option>
                                            </select>

                                        </div>
                                    <label class="col-sm-2 col-sm-2 control-label ">Problem Name </label>
                                        <div class="col-sm-4">
                                            <select id="slct2" name="slct2" class="form-control">
                                             <option value="">Frist Select Software</option></select>
                                        </div>
                             </div>


                    <div class="form-group col-sm-12">
                                <label class="col-sm-2 col-sm-2 control-label ">Complaint Details (max 2000 words) </label>
                                    <div class="col-sm-6" style="">
                                        <textarea name="complaindetails" spellcheck="true" placeholder="Write somthing about your problems......" required="required" cols="5" rows="5" class="form-control" maxlength="2000"></textarea>
                                        <!-- Test Editor add -->
                                        <!--textarea name="complaindetails" "></textarea>
                                                <script>
                                                    CKEDITOR.replace( 'complaindetails' );
                                                </script-->

                                    </div>
                        

                                <label class="col-sm-2 col-sm-2 control-label "> File(if any) </label>
                                    <div class="col-sm-4">
                                        <input type="file" name="compfile" class="form-control" value="">
                                    </div>
                    </div>



                    <div class="form-group">
                            <div class="col-sm-10 " style="padding-left:50% ">
                                <button type="submit" name="submit" class="btn btn-primary control-label">Submit</button>
                            </div>
                    </div>



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