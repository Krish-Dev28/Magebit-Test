<?php

session_start();
unset($_SESSION['auth_email']);
session_destroy();
header('location:magebit.php');

 ?>
