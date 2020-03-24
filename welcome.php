
<?php
session_start();

if (isset($_SESSION['auth_email']))
{
echo "<br><a href='logout.php'>Log Out</a>";
}
else {
  echo "Page Access Denied";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="wstyle.css">
    <link rel="shortcut icon" type="png" href="favicon.png">
    <title>My Dashboard</title>
  </head>
  <body>
    <center>
    <form action="update.php" method="POST">
      <h2>User Profile</h2>
      <input type="text" name="email" placeholder="Confirm Email"/><br/>
      <input type="text" name="age" placeholder="Enter Age"/><br/>
      <input type="text" name="city" placeholder="Enter City"/><br/>
      <input type="text" name="country" placeholder="Enter Country"/><br/>
      <button type="submit" name="update" class="btn btn-primary">Update</button>

    </form>
          <h1>
            <div style='float:left; margin-bottom:20px;'>
              MAGEBIT
            </div>
            <div class="stage">
              <div class="pyramid3d">
                <div class="triangle side1"></div>
                <div class="triangle side2"></div>
                <div class="triangle side3"></div>
                <div class="triangle side4"></div>
              </div>
          </h1>
          <p>Whether you’re a startup looking for that extra kick or an established retailer in need of a fresh perspective, we are here to take your digital commerce to the next level. We help companies with great products build powerful stores, drive more visitors, and optimize conversions</p>

        </div>
    <footer class = "section">
      <div class="center grey-text">ALL RIGHTS RESERVED "MAGEBIT" 2016.
      </div>
    </footer>
  </body>
</html>
