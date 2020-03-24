
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Magebit</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="shortcut icon" type="png" href="favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="magebit" id="magebit">
    <div class="form-magebit sign-up-magebit">
      <form action="signup.php" method="POST">
        <img src = "favicon.png">
        <h1 class="sign-up">Sign Up</h1>
        <input type="text" placeholder="Name" name="name" id="name" style="background: url(name.png);background-repeat: no-repeat;background-position: right;">
        <input type="text" placeholder="Email" name="email" id="email" style="background: url(email.png);background-repeat: no-repeat;background-position: right;">
        <input type="password" placeholder="Password" name="password" id="password" style="background: url(Password.png);background-repeat: no-repeat;background-position: right;">
        <button type="submit" name="signup-submit" class="btn btn-primary">Sign Up</button>
    </form>
    </div>
    <div class="form-magebit sign-in-magebit">
      <form action="validation.php" method="POST">
        <img src = "Pictures/favicon.png">
        <h1>Log In</h1>
        <input type="text" placeholder="Email" name ="email" id="email" style="background: url(email.png);background-repeat: no-repeat;background-position: right;">
        <input type="password" placeholder="Password" name="password" id="password" style="background: url(Password.png);background-repeat: no-repeat;background-position: right;">
      <div>
        <a href="forgot.php">Forgot your password?</a>
      </div>
        <button type="submit" name="signin-submit" class="btn btn-primary">Log In</button>
    </form>
    </div>
    <div class="overlay-magebit">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
            <h1>Already a Star?</h1>
            <p>
                Please login with your details to enter a new world!
            </p>
            <button class="ghost" id="signIn">Log In</button>
        </div>
        <div class="overlay-panel overlay-right">
            <h1>Become a Star!</h1>
            <p>Enter your details and get started today!</p>
            <button class="ghost" id="signUp">Sign Up</button>
        </div>
    </div>
    </div>
</div>
<script src="main.js">
</script>
<footer class = "section">
  <div class="center grey-text">ALL RIGHTS RESERVED "MAGEBIT" 2016.
  </div>
</footer>
  </body>
</html>
