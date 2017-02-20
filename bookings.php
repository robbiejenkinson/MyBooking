<?php


require 'DB/bookingSQL.php';
require 'DB/dbconnect.php';

 ?>



 <!DOCTYPE html>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables-1.10.13/DataTables-1.10.13/media/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/MyNavbar.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbarNew navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">TheMeetingRoom</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="bookings.php">Bookings</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


      <p><br /></p>
        <div class="container">
          <br />
          <br />
          <h2><center>Meeting Room Bookings</center></h2>
          <br />
            <table class="table table-striped table-bordered table-hover" id="mydata">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Subject</td>
                  <td>Time From:</td>
                  <td>Time To:</td>
                  <td>Message</td>
                </tr>
              </thead>
              <tbody>
                <?php

                  $execItems = $connection->query("SELECT ID, name, subject, email, datetime1, datetime2, message FROM users WHERE datetime1 > NOW()");

                    while($infoItems = $execItems->fetch_array()){
                        echo    "
                            <tr>
                                <td>".$infoItems['ID']."</td>
                                <td>".$infoItems['name']."</td>
                                <td>".$infoItems['subject']."</td>
                                <td>".$infoItems['email']."</td>
                                <td>".date('H:i d-m-Y', strtotime($infoItems['datetime1']))."</td>
                                <td>".date('H:i d-m-Y', strtotime($infoItems['datetime2']))."</td>
                                <td>".$infoItems['message']."</td>
                            </tr>
                        ";

                        }
                ?>
              </tbody>
            </table>

        </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="DataTables-1.10.13/DataTables-1.10.13/media/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="DataTables-1.10.13/DataTables-1.10.13/media/js/jquery.dataTables.min.js"></script>
    <script src="DataTables-1.10.13/DataTables-1.10.13/media/js/dataTables.bootstrap.min.js"></script>
    <script>
      $('#mydata').dataTable({
        "order": [[4, 'asc']],

      }

      );
    </script>
  </body>
</html>
