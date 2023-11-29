<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ url_for('static', filename='styles/login.css') }}?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="{{ url_for('static', filename='styles/navbar.css') }}?v=<?php echo time(); ?>">
</head>

<body>
  <div class="ln">
    <nav class="navbar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#B_T.php">Brain tumor Detection</a></li>
        <li><a href="AD.php">Alzhiemer Detection</a></li>
      </ul>
      <!-- <div class="pimg" id="account_div" onclick="profileAccount();">
        <img id="img" src="Image/user.jpg" alt="user Login" height="50px" width="50px">
        <div id="account" class="account">
          <a href="profile.html">Profile</a>
          <br>
          <a href="#logout">Log out</a>
        </div>
      </div> -->
    </nav>
  </div>
  <div class="main">
    <center>
      <fieldset>

        <div class="section">

          <div>
            <h1>Login Here</h1>
            <form action="{{url_for('login')}}" method="post">
              <input required type="email" autocomplete=on id="userName" name="email" autocomplete="off" placeholder="Email">
              <br>
              <input required type="password" id="password" name="pass" required placeholder="Password">
              <br>
              <input type="submit" name="submit" id="btn1" value="Login">
              <input type="reset" id="btn2" name="reset" value="Clear"><br><br>
              <p>Not a registered member? <a href="/reg">Sign Up</a></p>
            </form>
          </div>

          <!-- <div>
            <div class="col">
              <h6>Or Connect With - </h6>
              <a href="#" class="fb btn">
                <i class="fa fa-facebook fa-fw"></i> Login with Facebook
              </a><br><br>
              <a href="#" class="twitter btn">
                <i class="fa fa-twitter fa-fw"></i> Login with Twitter
              </a><br><br>
              <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                </i> Login with Google+
              </a>
            </div>
          </div> -->
        </div>
      </fieldset>
    </center>
  </div>
</body>

</html>