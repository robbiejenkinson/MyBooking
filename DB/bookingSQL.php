<?php

if(isset($_POST['submit'])){

//print_r($_POST);exit

$Subject = mysqli_real_escape_string($connection, $_POST['subject']);
$Name = mysqli_real_escape_string($connection, $_POST['name']);
$Email = mysqli_real_escape_string($connection, $_POST['email']);
$date = mysqli_real_escape_string($connection, $_POST['date1']);
$time = mysqli_real_escape_string($connection, $_POST['time1']);
$message = mysqli_real_escape_string($connection, $_POST['message']);

$sql = "INSERT INTO users (subject,name,email,date1,time1,message) VALUES ('$Subject','$Name','$Email','$date','$time','$message')";


if (!mysqli_query($connection,$sql)) {
  die('Error: ' . mysqli_error($connection));
}
mysqli_close($connection);
}

?>
