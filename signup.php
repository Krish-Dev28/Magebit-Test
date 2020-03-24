
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

if (empty($name) || empty($email) || empty($password)) {
header("Location:magebit.php?error=emptyfield");
exit(); }

require 'dbh.php';
$s = " SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if ($num==1) {
  header("Location:magebit.php?AlreadyRegisteredPleaseSignIn");

} else {
  require 'dbh.php';
  $sql = " INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')";
  mysqli_query($conn, $sql);
  header("Location:magebit.php?register=success");
}


?>
