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
  <h2 class="page-header">Notifications</h2>
  <hr style="border-top:2px solid;">
<!--  <h4> New </h4>-->
  <div>
    <small> Jun 01 12:00:00 PM</small>
    <div class="alert alert-success alert-dismissable" >
      You have an Event on 12/06/2020 at our college You have an Event on 12/06/2020 at our college You have an Event on 12/06/2020 at our college <a class="alert-link" href="#"> view more.. </a>
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    </div>
  </div>

  <hr>
  <div>
    <div><small>Jun 01 12:00:00 PM</small></div>
    <div class="alert alert-dark alert-dismissable" >
      You have an Event on 12/06/2020 at our college You have an Event on 12/06/2020 at our college You have an Event on 12/06/2020 at our college <a class="alert-link" href="#"> view more.. </a>
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    </div>
  </div>
  <div>
    <div><small>Jun 01 12:00:00 PM</small></div>
    <div class="alert alert-dark alert-dismissable" >
      You have an Event on 12/06/2020 at our college You have an Event on 12/06/2020 at our college You have an Event on 12/06/2020 at our college <a class="alert-link" href="#"> view more.. </a>
      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    </div>
  </div>



  <button class="btn btn-primary">Move All to trash</button>
</div>

<!-- FOOTER HERE -->
<?php
include('footer.php');
?>

</body>
</html>
