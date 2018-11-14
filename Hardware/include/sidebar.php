<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">

							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages" style="color: #27E5E2; font-size: 20px;" >
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									Hardware 
								</a>
								<ul id="togglePages" class="collapse unstyled ">
									<li>

										<!--  button type="button" class="btn btn-primary">Primary <span class="badge">7</span></button-->


									
										<a href="notprocess-complaint">
											<i class="icon-tasks"></i>
											Not Process Yet Complaint

										</button>
											<?php
											$rt = mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep` = 'Hardware' AND `status` is null");
											$num1 = mysqli_num_rows($rt);
											{?>
		
											<b class="label orange pull-right "><?php echo htmlentities($num1); ?></b>
											<?php } ?>
										</a>
									</li>
									<li>
										<a href="inprocess-complaint">
											<i class="icon-tasks"></i>
											Pending Complaint
							                   <?php 
												  $status="in Process";                   
												$rt = mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep` = 'Hardware' AND `status` = '$status'");
												$num1 = mysqli_num_rows($rt);
												{?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
												<?php } 
												?>
											
										</a>
									</li>
									<li>
										<a href="closed-complaint">
											<i class="icon-inbox"></i>
											Closed Complaints
										     <?php 
												  $status="closed";                   
												  $rt = mysqli_query($con,"SELECT * FROM `tblcomplaints` WHERE `cat_dep` = 'Hardware' AND `status` = '$status'");
												  $num1 = mysqli_num_rows($rt);
												  {?><b class="label pull-right"><?php echo htmlentities($num1); ?></b>
												<?php } 
											?>

										</a>
									</li>
								</ul>
							</li>
				</ul>



<ul class="widget widget-menu unstyled">

							
							
							<li>
								<a href="manage-users">
									<i class="menu-icon icon-group"></i>
									Manage users
								</a>
							</li>

							<li><a href="delivery_report"><i class="menu-icon icon-sitemap"></i>Delivery Report</a></li>

							<li><a href="not_deliver"><i class="menu-icon icon-sitemap"></i>Not Delivery Report</a></li>



				</ul>

		

			<ul class="widget widget-menu unstyled">

							
							<li><a href="user-logs"><i class="menu-icon icon-sitemap"></i>User Login Log </a></li>

							<li>
								<a href="Admin_manual">
									<i class="menu-icon icon-suitcase"></i>
									User Manual
								</a>
							</li>
							
							<li>
								<a href="reportPrint">
									<i class="menu-icon icon-suitcase"></i>
									Report
								</a>
							</li>
							
							<li>
								<a href="logout">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
							
						</ul>


						<!--ul class="widget widget-menu unstyled">
                                <li><a href="category"><i class="menu-icon icon-tasks"></i> Add Field </a></li>
                                <li><a href="subcategory"><i class="menu-icon icon-tasks"></i>Sub Field </a></li>
                                <li><a href="state"><i class="menu-icon icon-paste"></i>Add Business Location</a></li>
                                

                             </ul--><!--/.widget-nav-->

                            




					</div><!--/.sidebar-->
				</div><!--/.span3-->
