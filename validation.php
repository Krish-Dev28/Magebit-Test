
<?php
session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];

if (empty($email) || empty($password)) {
header("Location:magebit.php?error=emptyfield");
exit(); }

require 'dbh.php';

$s = " SELECT * FROM users WHERE email = '$email' && password = '$password'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if ($num==1) {
  $_SESSION['auth_email'] = $email;
  header('location: welcome.php');
} else {
  header('location:magebit.php?signinfailed');
  exit();
}

?>
