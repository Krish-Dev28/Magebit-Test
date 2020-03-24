<?php
session_start();

$email = $_POST['email'];
  require 'dbh.php';
    $sql = " SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if (mysqli_num_rows ($result)==1)
    {
        $code= rand(100,999);
        $message="You activation link is:http://localhost/Magebit/reset.php?email=$email&code=$code";
        mail($email, "Send Code", $message);
        echo 'Email sent';
        }
?>
