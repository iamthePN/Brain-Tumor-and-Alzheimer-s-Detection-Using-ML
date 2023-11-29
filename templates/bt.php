<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brain Tumor Detection</title>
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/bt.css">
    
</head>

<body>
<div>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="bt.php">Brain tumor Detection</a></li>
            <li><a href="#AD">Alzhiemer Detection</a></li>
        </ul>
        <div class="pimg" id="account_div" onclick="profileAccount();">
            <img id="img" src="Image/user.jpg" alt="user Login" height="50px" width="50px">
            <div id="account" class="account">
                <a href="profile.php">Profile</a>
                <br>
                <a href="#logout">Log out</a>
            </div>
        </div>
    </nav>

    <div class="upload_div">
        <h1> 
            <center>Brain Tumor Detection</center><br>
        </h1>
        <section onclick="document.getElementById('file-input').click();" ondragover="handleDragOver(event);"
            ondrop="handleDrop(event);">
            <article>
                <!-- <h1>
                    <center>Brain Tumor Detection</center><br>
                </h1> -->
                <h2>
                    <center>Upload Image</center>
                </h2>
                <div id="inp">
                    <label for="file-input" id="upload-btn" onclick="document.getElementById('file-input').click()">
                        <center>
                            <h6>Choose Image</h6>
                        </center>
                        <p id="dr">or drop image</p>
                    </label>
                    <input type="file" id="file-input" accept="image/*" onchange="handleFileUpload(this.files)">
                    <img id="image-preview" src="#" alt="Image Preview">
                    <div class="after-btn">
                        <button id="cancel-btn" onclick="cancelUpload()">Cancel</button>
                        <button id="predict-btn" onclick="predictImage()">Predict</button>
                    </div>
    
                </div>
            </article>
        </section>
    </div>
</div>


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
    </script>
</body>

</html>