<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign Up</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ url_for('static', filename='styles/reg.css') }}">
  <link rel="stylesheet" href="{{ url_for('static', filename='styles/navbarreg.css') }}">

</head>

<body>
  <div class="ln">
    <nav class="navbar">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="bt.php">Brain tumor Detection</a></li>
        <li><a href="#AD">Alzhiemer Detection</a></li>
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
        <legend></legend>
        <div class="section">
          <dive>
            <h1>Sign Up</h1>
            <form action="insertphp.php" method="POST">
              <input required type="text" id="FName" name="fname" autocomplete="off" placeholder="First Name">
              <br>
              <input required type="text" id="LName" name="lname" autocomplete="off" placeholder="Last Name">
              <br>
              <input required type="text" id="userName" name="user" autocomplete="off" placeholder="Username">
              <br>
              <input required type="email" id="email" name="email" required autocomplete="off"
                placeholder="Email Address">
              <br>
              <input required type="password" id="password" name="pass" required placeholder="Password">
              <br>
              <input type="submit" id="btn1" name="submit" value="SUBMIT">
              <input type="reset" id="btn2" value="Reset">
              <p>Already a member? <a href="/">Log in</a></p>
            </form>
            <div></div>

            <!-- <div>
              <h6>Or Connect With - </h6>
              <div class="col">
                <a href="#" class="fb btn">
                  <i class="fa fa-facebook fa-fw"></i> Sign Up with Facebook
                </a>
                <br><br>
                <a href="#" class="twitter btn">
                  <i class="fa fa-twitter fa-fw"></i> Sign Up with Twitter
                </a>
                <br><br>
                <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                  </i> Sign Up with Google+
                </a>
              </div>
          </dive> -->
        </div>
      </fieldset>
    </center>
  </div>
</body>

</html>