<!DOCTYPE html>
<html lang="en">
<?php

include('connect.php');
$mail="";
if(isset(($_GET["Email"]))){
    $mail=$_GET['Email'];
    $dbinfo = "SELECT Fname,Lname,Email FROM user WHERE Email = '$mail'";
    $dbresult = mysqli_query($conn, $dbinfo);
    $var = mysqli_fetch_array($dbresult);

    $fname = $var['Fname'];
    $lname = $var['Lname'];
    $email = $var['Email'];
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brain Tumor Detection</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='styles/AD.css') }}?v=<?php echo time(); ?>">
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="/ad">Alzheimer Detection</a></li>
        </ul>
        <!-- <div class="pimg" id="account_div" onclick="profileAccount();">
            <img id="img" src="Image/user.jpg" alt="user Login" height="45px" width="45px">
            <div id="account" class="account">
                <a href="profile.php?Email=<?php echo $_GET['m'];?>">Profile</a>
                <br>
                <a href="#logout">Log out</a>
            </div>
        </div> -->
    </nav>
    <h1>Brain Tumor Detection</h1>
    <section ondragover="handleDragOver(event);" ondrop="handleDrop(event);">
        <article>
            <!-- <h1>
                <center>Brain Tumor Detection</center><br>
            </h1> -->
            <h2>
                <center>Upload Image</center>
            </h2>
            <div id="inp">
                <label for="file-input" id="upload-btn">
                    <center>
                        <h6>Choose Image</h6>
                    </center>
                    <p id="dr">or drop image</p>
                </label>
                <form action="/predict" method="POST" enctype="multipart/form-data">
                <input type="file" id="file-input" name="file" accept="image/*" onchange="handleFileUpload(this.files)">
                <img id="image-preview" src="#" alt="Image Preview">
                <div class="after-btn">
                    <button id="cancel-btn" onclick="cancelUpload()">Cancel</button>
                    <button id="predict-btn" onclick="predictImage()">Predict</button>
                </div>
                </form>
                <div id="prediction-result">
            </div>
        </article>
    </section>
<footer class="footer">

    <p>&copy; 2023 All Rights Reserved. | <a href="#privacy">Privacy Policy</a> | <a href="#contact">Contact Us</a></p>

</footer>

    <script>
        function handleFileUpload(files) {
            const uploadedFile = files[0];
            const previewImage = document.getElementById('image-preview');
            const uploadBtn = document.getElementById('upload-btn');
            const cancelBtn = document.getElementById('cancel-btn');
            const predictBtn = document.getElementById('predict-btn');

            if (uploadedFile) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                };

                reader.readAsDataURL(uploadedFile);
                previewImage.style.display = 'block';
                uploadBtn.style.display = 'none';
                cancelBtn.style.display = 'inline-block';
                predictBtn.style.display = 'inline-block';
            }
        }

        function cancelUpload() {
            const uploadBtn = document.getElementById('upload-btn');
            const cancelBtn = document.getElementById('cancel-btn');
            const predictBtn = document.getElementById('predict-btn');
            const previewImage = document.getElementById('image-preview');

            document.getElementById('file-input').value = '';
            previewImage.src = '';
            previewImage.style.display = 'none';
            uploadBtn.style.display = 'inline-block';
            cancelBtn.style.display = 'none';
            predictBtn.style.display = 'none';
        }

        function predictImage() {
            alert("Image Predicted!");
        }

        function handleDragOver(event) {
            event.preventDefault();
        }

        function handleDrop(event) {
            event.preventDefault();
            const files = event.dataTransfer.files;
            handleFileUpload(files);
        }

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