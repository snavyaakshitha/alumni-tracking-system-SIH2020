<?php
session_start();

$_SESSION['Hello'] = "OK";
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login - Register to connect with DHE GOA Alumni</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/login.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="ext/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div id="wrapper">

			<!-- HEADER START HERE -->
			<?php
			include('header.php');
			?>

			<!-- MAIN PAGE START HERE -->
			<div class="container-fluid" style="margin-top:5px">
				<div class="row">
					<div class="col-md-8" >
						<!-- Carousel -->
						<div id="alumni-imgs" class="carousel slide" data-ride="carousel" data-interval="3000">

						  <!-- Indicators -->
						  <ul class="carousel-indicators">
						    <li data-target="#alumni-imgs" data-slide-to="0" class="active"></li>
						    <li data-target="#alumni-imgs" data-slide-to="1"></li>
						    <li data-target="#alumni-imgs" data-slide-to="2"></li>
								<li data-target="#alumni-imgs" data-slide-to="3"></li>
						    <li data-target="#alumni-imgs" data-slide-to="4"></li>
								<li data-target="#alumni-imgs" data-slide-to="5"></li>
						  </ul>

						  <!-- The slideshow -->
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="http://www.twenty19.com/blog/wp-content/uploads/2017/07/635959352181425725112395892_college.jpg" alt="Los Angeles" height="400" width="1100">
									<div class="carousel-caption d-none d-md-block">
								    <h5>Acheivements 1</h5>
								    <p>Done 1</p>
								  </div>
						    </div>
						    <div class="carousel-item">
						      <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Chicago" height="400" width="1100">
									<div class="carousel-caption d-none d-md-block">
								    <h5>Acheivements 2</h5>
								    <p>Done 2</p>
								  </div>
						    </div>
						    <div class="carousel-item">
						      <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="New York" height="400" width="1100">
									<div class="carousel-caption d-none d-md-block">
								    <h5>Acheivements 3</h5>
								    <p>Done 3</p>
								  </div>
						    </div>
								<div class="carousel-item">
						      <img src="https://www.w3schools.com/bootstrap/la.jpg" alt="Los Angeles" height="400" width="1100">
									<div class="carousel-caption d-none d-md-block">
								    <h5>Acheivements 1</h5>
								    <p>Done 1</p>
								  </div>
						    </div>
						    <div class="carousel-item">
						      <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Chicago" height="400" width="1100">
									<div class="carousel-caption d-none d-md-block">
								    <h5>Acheivements 2</h5>
								    <p>Done 2</p>
								  </div>
						    </div>
						    <div class="carousel-item">
						      <img src="https://www.w3schools.com/bootstrap/ny.jpg" alt="New York" height="400" width="1100">
									<div class="carousel-caption d-none d-md-block">
								    <h5>Acheivements 3</h5>
								    <p>Done 3</p>
								  </div>
						    </div>
						  </div>

						  <!-- Left and right controls -->
						  <a class="carousel-control-prev" href="#alumni-imgs" data-slide="prev">
						    <span class="carousel-control-prev-icon"></span>
						  </a>
						  <a class="carousel-control-next" href="#alumni-imgs" data-slide="next">
						    <span class="carousel-control-next-icon"></span>
						  </a>
						</div>
					</div>

					<!-- Login Form -->
					<div class="col-md-4" style="padding-top:20px;">
						<div class="card border-0">
							<article class="card-body">
								<a href="/alumni/user-reg.php" class="float-right btn btn-primary">Register</a>
								<h4 class="card-title mb-4 mt-1">Sign in</h4>
								<!--<p>
									<a href="" class="btn btn-block btn-outline-info"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
									<a href="" class="btn btn-block btn-outline-primary"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
								</p>-->
								<hr>

								<form method="post" action="process_login.php">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
											    <span class="input-group-text bg-dark border-0"> <i class="fa fa-user text-white"></i> </span>
											</div>
											<input name="loginid" class="form-control" placeholder="alumni login" type="text">
										</div> <!-- input-group.// -->
									</div> <!-- form-group// -->
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-prepend">
											    <span class="input-group-text bg-dark border-0"> <i class="fa fa-lock text-white"></i> </span>
											</div>
										  <input name="psswd" class="form-control" placeholder="******" type="password">
										</div> <!-- input-group.// -->
									</div> <!-- form-group// -->
									<div class="form-group">
										<button id="Login_Button" type="submit" class="btn btn-primary btn-block"> Login  </button>
									</div> <!-- form-group// -->
									<p class="text-center"><a href="#" class="btn">Forgot password?</a></p>
								</form>
							</article>
						</div> <!-- card.// -->
					</div>
				</div>
			</div>

			<hr>

			<!-- NEWS/EVENTS START HERE
			<div class="container-fluid" style="max-width:90%">
				<div class="row">

					<div class="col" style="background-color:#46d4e0;">
						hi
					</div>

					<div class="col" style="background-color:#46d4e0;">
						hi
					</div>
				</div>
			</div>-->

			<!-- FOOTER HERE -->
			<?php
			include('footer.php');
			?>

		</div>

		<script type="text/javascript">
			$(document).ready(function(){
				//alert("jQuery active");
				//$('#Login_Button').click(function() {
					//$('#Login_Button').prop('disabled', true);
					//$('#Login_Button').html("<div><i class='fa-li fa fa-spinner fa-spin'></i></div>");
					//debugger;
				//});
			});
		</script>
	</body>

</html>
