<!DOCTYPE html>
<html lang="en">
<?php

include('connect.php');
session_start();
$email = $_SESSION['email'];
if (isset($email)) {
    $mail = $email;
    $dbinfo = "SELECT Fname,Lname,Email FROM user WHERE Email = '$mail'";
    $dbresult = mysqli_query($conn, $dbinfo);
    $var = mysqli_fetch_array($dbresult);

    $fname = $var['Fname'];
    $lname = $var['Lname'];
    $email = $var['Email'];
} else
    header("location: login.php");

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='styles/index.css') }}?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url_for('static', filename='styles/navbar.css') }}?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="{{ url_for('static', filename='styles/footer.css') }}?v=<?php echo time(); ?>">


</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="/bt">Brain tumor Detection</a></li>
            <li><a href="/ad">Alzhiemer Detection</a></li>
        </ul>
        <p class="profi_Name">
            <?php echo $fname, " ", $lname; ?>
        </p>

        <div class="pimg" id="account_div" onclick="profileAccount();">

            <img id="img" src="{{ url_for('static', filename='images/user1.jpg') }}" alt="user Login" height="45px"
                width="45px">
            <div id="account" class="account">
                <a href="/profile?Email=<?php echo $email; ?>">Profile</a>
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
                <p class="p">To provide free, individualized navigation to help patients and <br> loved ones manage a
                    primary brain tumor diagnosis, overcome treatment obstacles, and facilitate access to quality
                    healthcare.</p>
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
        <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100"
            preserveAspectRatio="none">
            <path class="footer-wave-path"
                d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z">
            </path>
        </svg>
        <div class="footer-content">
            <div class="footer-content-column">
                <div class="footer-logo">
                    <a class="footer-logo-link" href="#">
                        <!-- <span class="hidden-link-text">LOGO</span> -->
                        <img src="{{ url_for('static', filename='images/brain.png') }}" style="height: 175px;">
                    </a>
                </div>
                <div class="footer-menu">
                    <h2 class="footer-menu-name"> Brain Health Hub</h2>
                    <ul id="menu-get-started" class="footer-menu-list">
                        <li class="menu-item menu-item-type-post_type menu-item-object-product">
                            <a>Health Matters!</a>
                        </li><br>
                        <li class="menu-item menu-item-type-post_type menu-item-object-product">
                            <a href="/bt">Brain Tumor Detection</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-product">
                            <a href="/ad">Alzheimer Detection</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Counting numbers content -->
            <div class="row">
                <div class="counter-container">
                    <h1><span id="counting-numbers1" class="counter">0</span></h1>
                    <p class="counter-name">BRAIN DISEASE PATIENTS (2023)</p>
                </div>

                <div class="counter-container">
                    <h1><span id="counting-numbers2" class="counter">0</span></h1>
                    <p class="counter-name">DEATHS IN 2023</p>
                </div>

                <div class="counter-container">
                    <h1><span id="counting-numbers3" class="counter">37.5%</span></h1>
                    <p class="counter-name">RELATIVE SURVIVAL RATE</p>
                </div>

            </div>

        </div>
        <div class="footer-copyright">
            <div class="footer-copyright-wrapper">
                <p class="footer-copyright-text">
                    <a class="footer-copyright-link" href="#" target="_self"> ©2020. | @Copyright. |
                        All
                        rights reserved. </a>
                </p>
            </div>
        </div>
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



        // Set your target numbers
        const targetNumbers = [24810, 18990];

        // Get the elements where the counting numbers will be displayed
        const countingNumbersElements = [
            document.getElementById('counting-numbers1'),
            document.getElementById('counting-numbers2'),
        ];

        // Function to animate counting numbers
        function countNumbers(targetNumber, element) {
            let currentNumber = 0;
            const interval = setInterval(() => {
                element.textContent = currentNumber;
                currentNumber++;

                if (currentNumber > targetNumber) {
                    clearInterval(interval);
                }
            }, -10000000000000000); // Adjust the interval for smoother or faster animation
        }

        // Call the function for each target number and element
        countingNumbersElements.forEach((element, index) => {
            countNumbers(targetNumbers[index], element);
        });

        // Landing Page


    </script>
</body>

</html>