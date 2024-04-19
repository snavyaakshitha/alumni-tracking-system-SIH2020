<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register to connect with DHE GOA Alumni</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <!-- All Scrips -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    		<link rel="stylesheet" href="ext/font-awesome.min.css">
    		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


        <link href="style.css" rel="stylesheet" type="text/css"/>
        <style>
            /*label{
            display:block;
            width:200px;
            float:left;
            text-align:right;
            margin:10px 5px;
            clear:left;
            }
            input,select,textarea{
            margin:10px 5px;
            vertical-align:middle;
            }
            #submit{
            display:block;
            padding:10px;
            width:50%;
            margin:0 auto;
            background-color:green;
            text-align:center;
            }*/
        </style>
    </head>
    <body>

        <!-- HEADER START HERE -->
        <?php
        include('header.php');
        ?>

        <div class="container w-50">
          <div class="d-flex pt-3">
            <h3 class="align-items-center">Alumni Registeration</h3>
          </div>
          <hr>

          <form action="reg-form-submit.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="user_full_name">Name:</label>
                <input class="form-control" type="text" name="user_full_name" required id="name" autofocus/>
              </div>
              <div class="form-group col-md-4">
                <label for="rollno">Roll No.:</label>
                <input class="form-control" type="text" name="rollno" required id="rollno"/>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="date">Date of Birth:</label>
                <input class="form-control" type="date" name="date" id="date"/>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col">
              <label for="addr">Address:</label>
              <input class="form-control" type="text" name="addr" id="addr"/>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="coll">College:</label>
                <select class="form-control" name="coll" required id="coll">
                  <option value="o1">MGIT</option>
                  <option value="o2">Clg 2</option>
                  <option value="o3">Clg 3</option>

                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="choose"></label>
                <input type="radio" name="radio" value="r1"/> B.Tech
                <input type="radio" name="radio" value="r2"/> M.Tech
              </div>
            </div>

            <div class="form-group">
              <label for="course">Course:</label>
              <select class="form-control" name="dropdown" required>
                  <option value="o1">CSE</option>
                  <option value="o2">Option 2</option>
                  <option value="o3">Option 3</option>
                  <option value="o4">Option 4</option>
                  <option value="o5">Option 5</option>
              </select>
            </div>

            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="admission">Year of Admission:</label>
                <select class="form-control" name="dropdown" required>
                    <option value="o1">2016</option>
                    <option value="o2">Option 2</option>
                    <option value="o3">Option 3</option>
                    <option value="o4">Option 4</option>
                    <option value="o5">Option 5</option>
                </select>
              </div>

              <div class="form-group  col-md-3">
                <label for="grad">Graduation Year:</label>
                <select class="form-control" name="dropdown" required>
                    <option value="o1">2020</option>
                    <option value="o2">Option 2</option>
                    <option value="o3">Option 3</option>
                    <option value="o4">Option 4</option>
                    <option value="o5">Option 5</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="arofwrk">Area of Work:</label>
              <input class="form-control" type="text" name="arofwrk" id="arofwrk"/>
            </div>

            <div class="form-group">
              <label for="curstat">Current Status:</label>
              <input class="form-control" type="text" name="curstat" id="curstat"/>
            </div>

            <div class="form-group">
              <label for="work">Work Details:</label>
              <textarea class="form-control" name="message" placeholder="your details here" id="work"></textarea>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="number">Phone No.:</label>
                <input class="form-control" type="text" name="mobile" id="number"/>
              </div>
              <div class="form-group col-md-8">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" required id="email"/>
              </div>
            </div>

            <hr>
            <div class="form-group">
              <input  class="btn btn-primary" id="submit" type="submit" value="Submit"/>
            </div>

          </form>
        </div>

        <!-- FOOTER HERE -->
  			<?php
  			include('footer.php');
  			?>

    </body>
</html>
