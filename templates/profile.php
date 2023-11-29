<!DOCTYPE html>
<html lang="en">
<?php

include('connect.php');

if(isset(($_GET["Email"]))){
    $mail=$_GET['Email'];
    $dbinfo = "SELECT Fname,Lname,Email FROM user WHERE Email = '$mail'";
    $dbresult = mysqli_query($conn, $dbinfo);
    $var = mysqli_fetch_assoc($dbresult);
    $fname = $var['Fname'];
    $lname = $var['Lname'];
    $email = $var['Email'];
}


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='styles/profile.css') }}?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url_for('static', filename='styles/navbar.css') }}?v=<?php echo time(); ?>">
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="bt.php">Brain tumor Detection</a></li>
            <li><a href="#AD">Alzhiemer Detection</a></li>
        </ul>
        <div class="pimg" id="account_div" onclick="profileAccount();">
            <img id="img" src="{{ url_for('static', filename='images/user1.jpg') }}" alt="user Login" height="50px" width="50px">
            <div id="account" class="account">
                <a href="index.php">Log out</a>
            </div>
        </div>
    </nav><br><br>
    <form action="">

        <div class="form">
            <div class="form2">
                <img src="{{ url_for('static', filename='images/img_avatar.png') }}" alt="">
            </div>
            <div class="form1">
                <h1>Profile Information:</h1><br><br>
                <label for="">First Name : <br>
                    <p>
                        <?php echo $fname; ?>
                    </p>
                </label><br>

                <label for="">Last Name : <br>
                    <p>
                        <?php echo $lname ?>
                    </p>
                </label><br>

                <label for="">Gmail : <br>
                    <?php echo $email; ?>
                </label><br>

            </div>
        </div>

    </form>

    <footer class="footer">

        <p>&copy; 2023 All Rights Reserved. | <a href="/privacy">Privacy Policy</a> | <a href="/contact">Contact Us</a>
        </p>

    </footer>
    <script>
        function profileAccount() {
            const list = document.querySelector('.account');
            list.classList.toggle('active')
        }
        let popup = document.getElementById("popup");
        function openPopup() {
            popup.classList.add("open-popup");
        }

        function closePopup() {
            popup.classList.remove("open-popup");
            window.location.href = "logout.php";
        }
        function cancelPopup() {
            popup.classList.remove("open-popup");
        }
    </script>
</body>

</html>