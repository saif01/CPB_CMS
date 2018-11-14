<aside>
          <div id="sidebar"  class="nav-collapse " style="background-color:#228B22 ;   " >
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile"><img src="assets/img/user_s.png" class="img-circle" width="60"></a></p>
                  <?php 

                      $query=mysqli_query($con,"select fullName from users where userEmail='".$_SESSION['userlogin']."'");
                          while($row=mysqli_fetch_array($query)) 
                            {
                               ?> 
                          	  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                              <?php 
                            } 

                  ?>
              	  	
                  <li class="mt">
                      <a href="dashboard">
                          <i class="fa fa-dashboard"></i>
                          <span style="font-size: 15px;" >Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span style="font-size: 15px;" >Account Setting</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="profile">Profile</a></li>
                          <li><a  href="change-password">Change Password</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="register-complaint" >
                          <i class="fa fa-book"></i>
                          <span style="font-size: 18px; color:white;">Submit Complaint</span>
                      </a>
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="complaint-history-har" >
                          <i class="fa fa-tasks"></i>
                          <span style="font-size: 15px;">Hardware History</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a href="complaint-history-app" >
                          <i class="fa fa-tasks"></i>
                          <span style="font-size: 15px;">Application History</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>