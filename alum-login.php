<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="ext/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>

		<!-- HEADER START HERE -->
		<?php
		include('header.php');
		?>

		<!-- NAVIGATION MENU START HERE -->
		<?php
		include('nav.php');
		?>

		<div class="container w-75">
			<div class="row card border-0">
				<div class="card-header bg-white">
					<h2 class="font-weight-bold card-title">ALUMNI NAME</h2>
					<h6 class="card-subtitle mb-2 text-muted ">Alumni</h6>
				</div>
				<div class="col-md card-body">
					<!--<h2 class="font-weight-bold card-title">ESHWAR REDDY YASA</h2>
					<h6 class="card-subtitle mb-2 text-muted ">Alumni</h6>
					<hr>-->
				  <h5 class="card-title">Address : </h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					<h5 class="card-title">College : </h5>
					<p class="card-text">Mahatma Gandhi Institute of Technology</p>
					<h5 class="card-title">Course : </h5>
					<p class="card-text">Computer Science & Engg.</p>
					<div class="row">
						<div class="col-md">
							<h5 class="card-title">Year of Admission : </h5>
							<p class="card-text">2014</p>
						</div>
						<div class="col-md">
							<h5 class="card-title">Year of Graduation : </h5>
							<p class="card-text">2017</p>
						</div>
					</div>

					<h5 class="card-title">Course : </h5>
					<p class="card-text">Computer Science & Engg.</p>

					<a href="#" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update Info</a>
				</div>
			</div>
		</div>

		<!-- FOOTER HERE -->
		<?php
		include('footer.php');
		?>

	</body>
</html>
