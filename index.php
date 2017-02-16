<?php


require 'DB/dbconnect.php';



?>
<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.9/jquery.timepicker.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.8.9/jquery.timepicker.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.datetimepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">

    <script src="jquery-3.1.1.min.js"></script>



</head>


    <title>TheMeetingRoom</title>


    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Book The Anne Frank</h1>
                <p class="lead">Insert your details to book the meeting room in advance</p>

            </div>
        </div>
        <!-- /.row -->


    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->


<br />
<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form" align="center">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="formAction.php">
                        <!-- Left Inputs -->
                        <div class="wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->

                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name">

                            <!-- Email -->
                            <input type="email" name="email" id="mail" required="required" class="form" placeholder="Email">
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject">

                          <!--  <input type="date" name="date1" id="date" required="required" class="form">

                            <input type="time" name="time1" id="time" required="required" class="form">

                          -->

                            <input type="text" id="datetimepicker" class="form" placeholder="Pick Date and time"/>

                        </div><!-- End Left Inputs -->

                        <!-- Right Inputs -->
                        <div class="wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message" align="center"></textarea>
                        </div><!-- End Right Inputs -->
                        <br>
                        <br>
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                        <!--  <button type="submit" id="submit" name="submit" >Send</button> -->
                        <button type="submit" id="submit" name="submit" class="form-btn semibold"> Send Message </button>

                        <br />
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>


  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery.datetimepicker.full.js"></script>
  <script>
  $(document).ready(function(){
    $(function() {
      $('#datetimepicker').datetimepicker({'step':15});
    });
});


</script>
                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->
          </div>





</body>
</html>
