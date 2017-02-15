<?php


require 'DB/bookingSQL.php';


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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <p><br /></p>
        <div class="container">
          <h1>MyTable</h1>
            <table class="table table-striped table-bordered table-hover" id="mydata">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Name</td>
                  <td>Email</td>
                  <td>Phone</td>
                  <td>Address</td>
                </tr>
              </thead>
              <tbody>
                <tr><td>1</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>2</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>3</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>4</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>5</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>6</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>7</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>8</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>9</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>1</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>2</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>3</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>4</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>5</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>6</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>7</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>8</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>
                <tr><td>9</td><td>Robbie</td><td>Robbiejenkinson@gmail.com</td><td>0862369825</td><td>32 skerries</td></tr>

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
      $('#mydata').dataTable();
    </script>
  </body>
</html>
