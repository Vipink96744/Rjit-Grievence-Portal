<?php
include "layout/admin_modal.php";
include "layout/student_modal.php";
include "layout/parent_modal.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Rjit Grievence Portal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>


	<div class="container"> <!-- Logo Container -->
		<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
			<center><img src="img/logo.png" class="img-fluid"></center>
		</div> <!-- RJIT Logo -->

		<br>
		<br>
		<center>
			<h4 class="col-md-12 col-sm-12 col-lg-12 col-xs-12 bg-dark text-white" >
				Grievance Redressal Portal
			</h4>
		</center><!-- Title -->

		<br>
	</div><!-- Logo Container Ends-->
	<hr>

	<!-- Services Container -->
	<div class="container">
		<div class="container">

			&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;
			<div class="card-deck">
				<!-- Admin Card -->
			  <div class="card bg-dark text-white">
			    <center>
					<i class="fa fa-user-lock fa-5x" style="margin-top: 10px; color: teal;"></i>
				</center>
			    <div class="card-body">
			      <center>
						<h3>Admin</h3>
					</center>
					<center>
						<p style="font-size: 14px;">Cras interdum placerat libero vel tempor.<br> Curabitur gravida iaculis erat quis dignissim</p>
					</center>
					<center>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#admin_login">
	  						Admin Login
						</button>
					</center>
			    </div>
			  </div>
			  <!-- Admin Card Ends-->

			  <!-- Student Card -->
			  <div class="card bg-dark text-white">
			    <center>
					<i class="fa fa-user-graduate fa-5x" style="margin-top: 10px; color: teal;"></i>
				</center>
			    <div class="card-body">
			      <center>
						<h3>Student</h3>
					</center>
					<center>
						<p style="font-size: 14px;">Cras interdum placerat libero vel tempor.<br> Curabitur gravida iaculis erat quis dignissim</p>
					</center>
					<center>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#student">
	  						Student Login
						</button>
					</center>
			    </div>
			  </div>
			  <!-- Student Card Ends-->

			  <!-- Parent Card -->
			  <div class="card bg-dark text-white">
			    <center>
					<i class="fa fa-chalkboard-teacher fa-5x" style="margin-top: 10px; color: teal;"></i>
				</center>
			    <div class="card-body">
				    <center>
						<h3>Parents</h3>
					</center>
					<center>
						<p style="font-size: 14px;">Cras interdum placerat libero vel tempor.<br> Curabitur gravida iaculis erat quis dignissim</p>
					</center>
					<center>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#parent">
 							Parent Login
						</button>
					</center>
			    </div>
		  	</div>
		  	<!-- Parent Card Ends-->
		 </div>
		</div> 
		<!-- Row Ends -->

		&nbsp;&nbsp;&nbsp;

		<div class="container">

			&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;
			<div class="card-deck">
				<!-- Admin Card -->
			  <div class="card bg-dark text-white">
			    <center>
					<i class="fa fa-user-lock fa-5x" style="margin-top: 10px; color: teal;"></i>
				</center>
			    <div class="card-body">
			      <center>
						<h3>Admin</h3>
					</center>
					<center>
						<p style="font-size: 14px;">Cras interdum placerat libero vel tempor.<br> Curabitur gravida iaculis erat quis dignissim</p>
					</center>
					<center>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#admin_login">
	  						Admin Login
						</button>
					</center>
			    </div>
			  </div>
			  <!-- Admin Card Ends-->

			  <!-- Student Card -->
			  <div class="card bg-dark text-white">
			    <center>
					<i class="fa fa-user-lock fa-5x" style="margin-top: 10px; color: teal;"></i>
				</center>
			    <div class="card-body">
			      <center>
						<h3>Student</h3>
					</center>
					<center>
						<p style="font-size: 14px;">Cras interdum placerat libero vel tempor.<br> Curabitur gravida iaculis erat quis dignissim</p>
					</center>
					<center>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#student">
	  						Student Login
						</button>
					</center>
			    </div>
			  </div>
			  <!-- Student Card Ends-->

			  <!-- Parent Card -->
			  <div class="card bg-dark text-white">
			    <center>
					<i class="fa fa-user-lock fa-5x" style="margin-top: 10px; color: teal;"></i>
				</center>
			    <div class="card-body">
				    <center>
						<h3>Parents</h3>
					</center>
					<center>
						<p style="font-size: 14px;">Cras interdum placerat libero vel tempor.<br> Curabitur gravida iaculis erat quis dignissim</p>
					</center>
					<center>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#parent">
 							Parent Login
						</button>
					</center>
			    </div>
		  	</div>
		  	<!-- Parent Card Ends-->
		 </div>
		</div> 
		<!-- Row Ends -->

	</div>
	<!-- Services Container Ends -->

	<br>

	<!-- Footer -->
	<div class="container-fluid">
		<center>
			<h6 class="col-md-12 col-sm-12 col-lg-12 col-xs-12 bg-dark text-white" style="height: 35px; 
				padding-top: 8px;">
				<i class="far fa-copyright" style="font-size: 14px;"></i> Copyright 2018, 
				<a href="">PN infosys</a>
			</h6>
		</center>
	</div>
	<!-- Footer -->
		  




</body>
</html>