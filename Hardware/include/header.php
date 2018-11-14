<div class="navbar navbar-fixed-top" >
		<div class="navbar-inner" style="background-color:#8CE9FF;">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse" >
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="../index"  >
			  		<!--b style="color:white; border: 1px solid black;"> CMS|CPB| </b-->
			  		CMS|CPB| 

			  		</a>
<a class="brand" >

	   Now Ádmin as :
	   <b style="color: green; ">
			  		<?php
			  			$actionby=$_SESSION['harlogin'];
		  				echo $actionby;			  
		  					?>

		  				</b>
			  	</a>

			 
			


				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">
						<li><a class="brand" href="index"  >
						<b style="padding-left: 35px;">	Admin </b>
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								 
								<li><a href="change-password">Change Admin Password</a></li>

								<li class="divider"></li>
								<li><a href="logout">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
