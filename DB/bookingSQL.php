<?php

if(isset($_POST['submit'])){

//print_r($_POST);exit

$Subject = ($_POST['subject']);
$Name = ($_POST['name']);
$Email = ($_POST['email']);
$datetime1 = ($_POST['datetime1']);
$datetime2 = ($_POST['datetime2']);
$message = ($_POST['message']);





$sql = "INSERT INTO users (subject,name,email,datetime1,datetime2,message) VALUES ('$Subject','$Name','$Email','$datetime1','$datetime2','$message')";


if (!mysqli_query($connection,$sql)) {
  die('Error: ' . mysqli_error($connection));
}
mysqli_close($connection);
}

?>
