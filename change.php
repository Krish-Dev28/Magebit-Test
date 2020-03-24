
<?php
$email = $_POST['email'];
if(isset($_POST['submit']))
{
    require "dbh.php";

	$password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = mysqli_query($conn,"SELECT * FROM users WHERE email = $email");

    if (mysqli_num_rows ($query)==1)
    {
        $password = $_POST['password'];
        mysqli_query($conn,"UPDATE users SET `password`='$password' WHERE email = $email");

        echo  "Password Changed";
    }
}

?>
