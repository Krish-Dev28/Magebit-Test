<?php


  include_once 'dbh.php';

  $email = $_POST['email'];
  $age = $_POST['age'];
  $city = $_POST['city'];
  $country = $_POST['country'];

  $sql = "INSERT INTO userdata(email,age,city,country,update_time) VALUES ('$email','$age','$city','$country',now());";
  mysqli_query($conn, $sql);

  echo "Updated Successfully";

 ?>
