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
        <li><a href="/log">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="/log">Brain tumor Detection</a></li>
        <li><a href="/log">Alzhiemer Detection</a></li>
      </ul>
    </nav>
  </div>
  <div class="main">
    <center>
      <fieldset>

        <div class="section">

          <div>
            <h1>!! Sorry, Invalid Credential !!</h1>
              <p>Not a registered member? <a href="reg.php">Sign Up</a></p>
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