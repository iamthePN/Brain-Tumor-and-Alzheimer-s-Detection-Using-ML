<!DOCTYPE html>
<html lang="en">
<?php

include('connect.php');
session_start();
$email=$_SESSION['email'];
if(isset($email)){
    $mail=$email;
    $dbinfo = "SELECT Fname,Lname,Email FROM user WHERE Email = '$mail'";
    $dbresult = mysqli_query($conn, $dbinfo);
    $var = mysqli_fetch_array($dbresult);

    $fname = $var['Fname'];
    $lname = $var['Lname'];
    $email = $var['Email'];
}else  header("location: login.php");

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='styles/index.css') }}?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url_for('static', filename='styles/navbar.css') }}?v=<?php echo time(); ?>">
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="/bt">Brain tumor Detection</a></li>
            <li><a href="/ad">Alzhiemer Detection</a></li>
        </ul>
        <p class="profi_Name"><?php echo $fname, " ", $lname; ?></p>
  
        <div class="pimg" id="account_div" onclick="profileAccount();">
       
        <img id="img" src="{{ url_for('static', filename='images/user1.jpg') }}" alt="user Login" height="45px" width="45px">
            <div id="account" class="account">
                <a href="/profile?Email=<?php echo $email;?>">Profile</a>
                <br>
                <a href="#logout">Log out</a> 
            </div>
        </div>
    </nav><br><br><br><br>
    <div class="content-items1">
        <!-- <div class="index_img">
            <img src="{{ url_for('static', filename='images/img1.png') }}" alt="" height="80vh">
            <div class="sec2">
                <h1>write Something Here </h1>
              
            </div>
        </div> -->
        <br><br>
        <div class="div">
        <center>
            <h1>
               <b>The Service Provided </b>
            </h1><br>
            <p class="p">To provide free, individualized navigation to help patients and <br> loved ones manage a primary brain tumor diagnosis, overcome treatment obstacles, and facilitate access to quality healthcare.</p>
            </center>
            <div class="d1">
                <img src="{{ url_for('static', filename='images/d1.svg') }}" alt="">
                <h2><b>Alzhiemer <br> Detection</b></h2><br><br>
                <p>Not sure what you want to do regarding your disease? We will support you along this journey no matter
                    what you choose.</p>
                    <br><br>
            </div>
            <div class="d2">
                <img src="{{ url_for('static', filename='images/d2.svg') }}" alt="">
                <h2><b>Brain Tumor Detection</b></h2><br><br>
                <p>We provide informational classes to help you have a healthy and/or learn good parenting skills.</p>
            </div>
            <!-- <div class="d3">
                <img src="{{ url_for('static', filename='images/d3.svg') }}" alt="">
                <h2><b>Support Services</b></h2><br><br>
                <p>Emotional support is crucial; counseling services can help patients and their families cope.</p>
            </div> -->
        </div>
    </div><br>
    <br>

    <footer class="footer">

        <p>&copy; 2023 All Rights Reserved. | <a href="#privacy">Privacy Policy</a> | <a href="#contact">Contact Us</a></p>

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