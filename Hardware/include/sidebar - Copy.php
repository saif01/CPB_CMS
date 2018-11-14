<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Hardware Complaint
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="notprocess-complaint.php">
											<i class="icon-tasks"></i>
											Not Process Yet Complaint
											<?php
											$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status is null");
											$num1 = mysqli_num_rows($rt);
											{?>
		
											<b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="inprocess-complaint.php">
											<i class="icon-tasks"></i>
											Pending Complaint
							                   <?php 
												  $status="in Process";                   
												$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
												$num1 = mysqli_num_rows($rt);
												{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
												<?php } 
												?>
											
										</a>
									</li>
									<li>
										<a href="closed-complaint.php">
											<i class="icon-inbox"></i>
											Closed Complaints
										     <?php 
												  $status="closed";                   
												  $rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
												  $num1 = mysqli_num_rows($rt);
												  {?><b class="label pull-right"><?php echo htmlentities($num1); ?></b>
												<?php } 
											?>

										</a>
									</li>
								</ul>
							</li>


							

							<li>
								<a href="registration.php">
									<i class="menu-icon icon-user"></i>
									Create new user
								</a>
							</li>
							
							<li>
								<a href="manage-users.php">
									<i class="menu-icon icon-group"></i>
									Manage users
								</a>
							</li>
						</ul>

						<ul class="widget widget-menu unstyled">

							<li><a href="delivery_report.php"><i class="menu-icon icon-sitemap"></i>Delivery Report</a></li>

							<li><a href="user-logs.php"><i class="menu-icon icon-sitemap"></i>User Login Log </a></li>

							<li>
								<a href="Admin_manual.php">
									<i class="menu-icon icon-suitcase"></i>
									User Manual
								</a>
							</li>
							
							
						</ul>




						<ul class="widget widget-menu unstyled">
                                <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Add Field </a></li>
                                <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>Sub Field </a></li>
                                <!--li><a href="state.php"><i class="menu-icon icon-paste"></i>Add Business Location</a></li-->
                                <li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>

                             </ul><!--/.widget-nav-->

                            




					</div><!--/.sidebar-->
				</div><!--/.span3-->
